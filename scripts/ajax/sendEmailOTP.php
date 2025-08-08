<?php
$jsonclass = $app->load_module("Services_JSON");
$obj_JSON = new $jsonclass(SERVICES_JSON_LOOSE_TYPE);

$emailVerifyProductId = $app->getPostVar("emailVerifyProductId");
$emailVerify = $app->getPostVar("emailVerify");
$name = $app->getPostVar("VerifyName");
$phone = $app->getPostVar("VerifyMobile");
$company = $app->getPostVar("VerifyCompanyName");

if($emailVerifyProductId!='' && $emailVerify!='')
{
    $otp=$app->utility->generate_OTP(6);

    $fields_map = array();	
    $fields_map['product_image_id'] = $emailVerifyProductId;
    $fields_map['email'] = $emailVerify;
    $fields_map['name'] = $name;
    $fields_map['phone'] = $phone;
    $fields_map['company'] = $company;
    $fields_map['otp'] = $otp;
    $fields_map['added_date'] =  date('d-m-Y H:i:s');
    $fields_map['ip'] = $ip;
    $obj_model_help=$app->load_model('product_enquiry');
    $obj_model_help->map_fields($fields_map);
    $insID=$obj_model_help->execute("INSERT");

    //send otp email
    $template_name="email_otp.html";
	$subject="Please verify your email ";
	$heading="Please verify your email";
	$body_parameters=array("otp"=>$otp,"SERVER_ROOT"=>SERVER_ROOT,"heading"=>$heading);	
	
	$mail_data=array();	
	$mail_data['email']=$emailVerify;
	$mail_data['template_name']=$template_name;
	$mail_data['subject']=$subject;
	$mail_data['body_parameters']=$body_parameters;											
	$app->utility->send_email_data($mail_data);	
					
    echo $obj_JSON->encode(["RESULT"=>"1","OTPID"=>$insID]);
	exit;
}
else
{
    echo $obj_JSON->encode(["RESULT"=>"0","MSG"=>"Error"]);
	exit;
}

?>