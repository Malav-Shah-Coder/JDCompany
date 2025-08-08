<?php
$jsonclass = $app->load_module("Services_JSON");
$obj_JSON = new $jsonclass(SERVICES_JSON_LOOSE_TYPE);

$otpVerifyID = $app->getPostVar("otpVerifyID");
$VerifyOtp = $app->getPostVar("VerifyOtp");

if($otpVerifyID!='' && $VerifyOtp!='')
{
    $obj_model_product_enquiry=$app->load_model('product_enquiry');
	$product_enquiry=$obj_model_product_enquiry->execute("SELECT",false,"","id='".$otpVerifyID."' and otp='".$VerifyOtp."'");
    if(count($product_enquiry)>0)
    {
        $fields_map = array();	
        $fields_map['otp_verify'] = 'yes';
        $obj_model_help=$app->load_model('product_enquiry');
        $obj_model_help->map_fields($fields_map);
        $insID=$obj_model_help->execute("UPDATE",false,"","id='".$otpVerifyID."'");

        //add in session
        if(!isset($_SESSION['product_image_check']))
        {
            $_SESSION['product_image_check']=[];
        }
        array_push($_SESSION['product_image_check'],$product_enquiry[0]['product_image_id']);
        
        $obj_model_product_image=$app->load_model('product_image');
	    $product_image=$obj_model_product_image->execute("SELECT",false,"","id='".$product_enquiry[0]['product_image_id']."'");

        //open image or file
        $file=SERVER_ROOT.'/uploads/product_image/'.$product_image[0][$_SESSION['lang'].'image'];
        echo $obj_JSON->encode(["RESULT"=>"1","FileType"=>$product_image[0]['file_type'],"file"=>$file]);
        exit;
    }
    else
    {
        echo $obj_JSON->encode(["RESULT"=>"0","MSG"=>"Error"]);
	    exit;
    }
}
else
{
    echo $obj_JSON->encode(["RESULT"=>"0","MSG"=>"Error"]);
	exit;
}

?>