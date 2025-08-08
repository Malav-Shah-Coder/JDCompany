<?php
	class model_contact_addresses{
		public $fields= array();
		public $nullable= array();
		public $default_value= array();
		public $ID= 0;
		public $KEY= "";

		function model_contact_addresses($ID=0){
			$this->ID = $ID;
			$this->KEY = "id";
			$this->fields["id"]="int(11)";
			$this->nullable["id"]="NO";
			$this->default_value["id"]="";
			$this->fields["eng_head"]="varchar(255)";
			$this->nullable["eng_head"]="NO";
			$this->default_value["eng_head"]="";
			$this->fields["fr_head"]="varchar(255)";
			$this->nullable["fr_head"]="NO";
			$this->default_value["fr_head"]="";
			$this->fields["eng_office_name"]="varchar(255)";
			$this->nullable["eng_office_name"]="NO";
			$this->default_value["eng_office_name"]="";
			$this->fields["fr_office_name"]="varchar(255)";
			$this->nullable["fr_office_name"]="NO";
			$this->default_value["fr_office_name"]="";
			$this->fields["eng_address"]="varchar(255)";
			$this->nullable["eng_address"]="NO";
			$this->default_value["eng_address"]="";
			$this->fields["fr_address"]="varchar(255)";
			$this->nullable["fr_address"]="NO";
			$this->default_value["fr_address"]="";
			$this->fields["phone1"]="varchar(255)";
			$this->nullable["phone1"]="NO";
			$this->default_value["phone1"]="";
			$this->fields["phone2"]="varchar(255)";
			$this->nullable["phone2"]="NO";
			$this->default_value["phone2"]="";
			$this->fields["email1"]="varchar(255)";
			$this->nullable["email1"]="NO";
			$this->default_value["email1"]="";
			$this->fields["email2"]="varchar(255)";
			$this->nullable["email2"]="NO";
			$this->default_value["email2"]="";
			$this->fields["sort_id"]="int(11)";
			$this->nullable["sort_id"]="NO";
			$this->default_value["sort_id"]="";
			$this->fields["status"]="enum('Active','Inactive','Trash')";
			$this->nullable["status"]="NO";
			$this->default_value["status"]="Active";
		}
	}
?>