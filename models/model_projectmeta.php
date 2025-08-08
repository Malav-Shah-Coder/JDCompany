<?php
	class model_projectmeta{
		public $fields= array();
		public $nullable= array();
		public $default_value= array();
		public $ID= 0;
		public $KEY= "";

		function model_projectmeta($ID=0){
			$this->ID = $ID;
			$this->KEY = "id";
			$this->fields["id"]="int(11)";
			$this->nullable["id"]="NO";
			$this->default_value["id"]="";
			$this->fields["title"]="varchar(255)";
			$this->nullable["title"]="NO";
			$this->default_value["title"]="";
			$this->fields["slug"]="varchar(255)";
			$this->nullable["slug"]="NO";
			$this->default_value["slug"]="";
			$this->fields["meta_title"]="varchar(255)";
			$this->nullable["meta_title"]="NO";
			$this->default_value["meta_title"]="";
			$this->fields["meta_keywords"]="varchar(255)";
			$this->nullable["meta_keywords"]="NO";
			$this->default_value["meta_keywords"]="";
			$this->fields["meta_desc"]="text";
			$this->nullable["meta_desc"]="NO";
			$this->default_value["meta_desc"]="";
			$this->fields["chat_code"]="text";
			$this->nullable["chat_code"]="NO";
			$this->default_value["chat_code"]="";
			$this->fields["head_body"]="text";
			$this->nullable["head_body"]="NO";
			$this->default_value["head_body"]="";
			$this->fields["status"]="enum('Active','Inactive','Trash')";
			$this->nullable["status"]="NO";
			$this->default_value["status"]="Active";
		}
	}
?>