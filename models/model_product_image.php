<?php
	class model_product_image{
		public $fields= array();
		public $nullable= array();
		public $default_value= array();
		public $ID= 0;
		public $KEY= "";

		function model_product_image($ID=0){
			$this->ID = $ID;
			$this->KEY = "id";
			$this->fields["id"]="int(11)";
			$this->nullable["id"]="NO";
			$this->default_value["id"]="";
			$this->fields["product_id"]="int(11)";
			$this->nullable["product_id"]="NO";
			$this->default_value["product_id"]="";
			$this->fields["eng_text"]="text";
			$this->nullable["eng_text"]="NO";
			$this->default_value["eng_text"]="";
			$this->fields["fr_text"]="text";
			$this->nullable["fr_text"]="NO";
			$this->default_value["fr_text"]="";
			$this->fields["eng_button_name"]="varchar(255)";
			$this->nullable["eng_button_name"]="NO";
			$this->default_value["eng_button_name"]="";
			$this->fields["fr_button_name"]="varchar(255)";
			$this->nullable["fr_button_name"]="NO";
			$this->default_value["fr_button_name"]="";
			$this->fields["eng_image"]="varchar(255)";
			$this->nullable["eng_image"]="NO";
			$this->default_value["eng_image"]="";
			$this->fields["fr_image"]="varchar(255)";
			$this->nullable["fr_image"]="NO";
			$this->default_value["fr_image"]="";
			$this->fields["sort_id"]="int(11)";
			$this->nullable["sort_id"]="NO";
			$this->default_value["sort_id"]="";
			$this->fields["status"]="enum('Active','Inactive')";
			$this->nullable["status"]="NO";
			$this->default_value["status"]="Active";
			$this->fields["file_type"]="enum('image','file')";
			$this->nullable["file_type"]="NO";
			$this->default_value["file_type"]="image";
			$this->fields["email_verify"]="enum('yes','no')";
			$this->nullable["email_verify"]="NO";
			$this->default_value["email_verify"]="yes";
		}
	}
?>