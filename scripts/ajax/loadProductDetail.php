<?php
if(!isset($_SESSION['product_image_check']))
{
    $_SESSION['product_image_check']=[];
}

$jsonclass = $app->load_module("Services_JSON");
$obj_JSON = new $jsonclass(SERVICES_JSON_LOOSE_TYPE);

$id = $app->getPostVar("id");

if($id!='' && is_numeric($id))
{	
	$obj_model_product_image=$app->load_model('product_image');
	$product_image=$obj_model_product_image->execute("SELECT",false,"","id='".$id."'");

	if(count($product_image)>0)
	{
		//check
		if(in_array($id,$_SESSION['product_image_check'])){
			$product_image[0]['email_verify']='no';
		}

		if($product_image[0]['email_verify']=='yes' && count($_SESSION['product_image_check'])==0) {
			//ask for email verification
			echo $obj_JSON->encode(["RESULT"=>"1"]);
			exit;
		}
		else {
			//open image or file
			$file=SERVER_ROOT.'/uploads/product_image/'.$product_image[0][$_SESSION['lang'].'image'];
			echo $obj_JSON->encode(["RESULT"=>"2","FileType"=>$product_image[0]['file_type'],"file"=>$file]);
			exit;
		}
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