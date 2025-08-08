<?php
	class model_csr_category{
		public $fields= array();
		public $nullable= array();
		public $default_value= array();
		public $ID= 0;
		public $KEY= "";

		function model_csr_category($ID=0){
			$this->ID = $ID;
			$this->KEY = "id";
			$this->fields["id"]="int(11)";
			$this->nullable["id"]="NO";
			$this->default_value["id"]="";
			$this->fields["eng_title"]="varchar(255)";
			$this->nullable["eng_title"]="NO";
			$this->default_value["eng_title"]="";
			$this->fields["slug"]="varchar(255)";
			$this->nullable["slug"]="NO";
			$this->default_value["slug"]="";
			$this->fields["fr_title"]="varchar(255)";
			$this->nullable["fr_title"]="NO";
			$this->default_value["fr_title"]="";
			$this->fields["eng_short_desc"]="text";
			$this->nullable["eng_short_desc"]="NO";
			$this->default_value["eng_short_desc"]="";
			$this->fields["fr_short_desc"]="text";
			$this->nullable["fr_short_desc"]="NO";
			$this->default_value["fr_short_desc"]="";
			$this->fields["sort_id"]="int(11)";
			$this->nullable["sort_id"]="NO";
			$this->default_value["sort_id"]="";
			$this->fields["status"]="enum('Active','Inactive','Trash')";
			$this->nullable["status"]="NO";
			$this->default_value["status"]="Active";
			$this->fields["meta_title"]="varchar(255)";
			$this->nullable["meta_title"]="NO";
			$this->default_value["meta_title"]="";
			$this->fields["meta_keywords"]="varchar(500)";
			$this->nullable["meta_keywords"]="NO";
			$this->default_value["meta_keywords"]="";
			$this->fields["meta_desc"]="varchar(500)";
			$this->nullable["meta_desc"]="NO";
			$this->default_value["meta_desc"]="";
		}
	}
?>