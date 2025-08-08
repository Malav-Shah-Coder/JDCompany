<?php
	class model_product_enquiry{
		public $fields= array();
		public $nullable= array();
		public $default_value= array();
		public $ID= 0;
		public $KEY= "";

		function model_product_enquiry($ID=0){
			$this->ID = $ID;
			$this->KEY = "id";
			$this->fields["id"]="int(11)";
			$this->nullable["id"]="NO";
			$this->default_value["id"]="";
			$this->fields["product_id"]="int(11)";
			$this->nullable["product_id"]="NO";
			$this->default_value["product_id"]="";
			$this->fields["product_image_id"]="int(11)";
			$this->nullable["product_image_id"]="NO";
			$this->default_value["product_image_id"]="";
			$this->fields["otp"]="varchar(255)";
			$this->nullable["otp"]="NO";
			$this->default_value["otp"]="";
			$this->fields["email"]="varchar(255)";
			$this->nullable["email"]="NO";
			$this->default_value["email"]="";
			$this->fields["name"]="varchar(255)";
			$this->nullable["name"]="NO";
			$this->default_value["name"]="";
			$this->fields["phone"]="varchar(255)";
			$this->nullable["phone"]="NO";
			$this->default_value["phone"]="";
			$this->fields["company"]="varchar(255)";
			$this->nullable["company"]="NO";
			$this->default_value["company"]="";
			$this->fields["otp_verify"]="enum('no','yes')";
			$this->nullable["otp_verify"]="NO";
			$this->default_value["otp_verify"]="no";
			$this->fields["added_date"]="varchar(255)";
			$this->nullable["added_date"]="NO";
			$this->default_value["added_date"]="";
			$this->fields["ip"]="varchar(255)";
			$this->nullable["ip"]="NO";
			$this->default_value["ip"]="";
		}
	}
?>