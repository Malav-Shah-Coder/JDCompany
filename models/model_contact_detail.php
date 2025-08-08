<?php
	class model_contact_detail{
		public $fields= array();
		public $nullable= array();
		public $default_value= array();
		public $ID= 0;
		public $KEY= "";

		function model_contact_detail($ID=0){
			$this->ID = $ID;
			$this->KEY = "id";
			$this->fields["id"]="int(11)";
			$this->nullable["id"]="NO";
			$this->default_value["id"]="";
			$this->fields["eng_page_title"]="varchar(255)";
			$this->nullable["eng_page_title"]="NO";
			$this->default_value["eng_page_title"]="";
			$this->fields["eng_page_desc"]="varchar(255)";
			$this->nullable["eng_page_desc"]="NO";
			$this->default_value["eng_page_desc"]="";
			$this->fields["fr_page_title"]="varchar(255)";
			$this->nullable["fr_page_title"]="NO";
			$this->default_value["fr_page_title"]="";
			$this->fields["fr_page_desc"]="varchar(255)";
			$this->nullable["fr_page_desc"]="NO";
			$this->default_value["fr_page_desc"]="";
			$this->fields["eng_contact_head"]="varchar(255)";
			$this->nullable["eng_contact_head"]="NO";
			$this->default_value["eng_contact_head"]="";
			$this->fields["eng_contact_desc"]="varchar(255)";
			$this->nullable["eng_contact_desc"]="NO";
			$this->default_value["eng_contact_desc"]="";
			$this->fields["fr_contact_head"]="varchar(255)";
			$this->nullable["fr_contact_head"]="NO";
			$this->default_value["fr_contact_head"]="";
			$this->fields["fr_contact_desc"]="varchar(255)";
			$this->nullable["fr_contact_desc"]="NO";
			$this->default_value["fr_contact_desc"]="";
			$this->fields["header_image"]="varchar(255)";
			$this->nullable["header_image"]="NO";
			$this->default_value["header_image"]="";
			$this->fields["meta_title"]="varchar(255)";
			$this->nullable["meta_title"]="NO";
			$this->default_value["meta_title"]="";
			$this->fields["meta_keywords"]="varchar(255)";
			$this->nullable["meta_keywords"]="NO";
			$this->default_value["meta_keywords"]="";
			$this->fields["meta_desc"]="text";
			$this->nullable["meta_desc"]="NO";
			$this->default_value["meta_desc"]="";
			$this->fields["head_body"]="text";
			$this->nullable["head_body"]="NO";
			$this->default_value["head_body"]="";
		}
	}
?>