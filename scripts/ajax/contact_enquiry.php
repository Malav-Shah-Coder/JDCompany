<?php
$jsonclass = $app->load_module("Services_JSON");
$obj_JSON = new $jsonclass(SERVICES_JSON_LOOSE_TYPE);

	$first_name = $app->getPostVar("first_name");
	$last_name = $app->getPostVar("last_name");
	$name=$first_name.' '.$last_name;
	$email = $app->getPostVar("email");
	$phone = $app->getPostVar("phone");
	$msg = $app->getPostVar("message");
	$ip=$_SERVER['REMOTE_ADDR'];
	
	// $fno = $app->getPostVar("fno");
	// $sno = $app->getPostVar("sno");
	
	// $total=$fno+$sno;
	// $UserCaptchaCode = $app->getPostVar("UserCaptchaCode");
	//&& $total==$UserCaptchaCode

	if($name!='' && $phone!='' && $email!='')
	{	
       	$fields_map = array();	
		$fields_map['email'] = $email;
		$fields_map['phone'] = $phone;
		$fields_map['msg'] = $msg;
		$fields_map['name'] = $name;
		$fields_map['added_date'] =  date('d-m-Y H:i:s');
		$fields_map['ip'] = $ip;
		$obj_model_help=$app->load_model('contact_enquiry');
		$obj_model_help->map_fields($fields_map);
		$insID=$obj_model_help->execute("INSERT");
						
		$template_name="contact_admin.html";
		$subject="New Contact Inquiry #".$insID;
		$heading="New Contact Inquiry #".$insID;
		$body_parameters=array("name"=>$name,"email"=>$email,"phone"=>$phone,"message"=>$msg,"SERVER_ROOT"=>SERVER_ROOT,"heading"=>$heading);	
		
		$mail_data=array();	
		$mail_data['email']=$email;
		$mail_data['template_name']=$template_name;
		$mail_data['subject']=$subject;
		$mail_data['body_parameters']=$body_parameters;											
		$app->utility->send_email_data($mail_data);	

		echo $obj_JSON->encode(array("RESULT"=>"0"));
		exit;
	}
	else
	{		
		echo $obj_JSON->encode(array("RESULT"=>"1"));
		exit;
	}
?>