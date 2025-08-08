<?php
	class model_product{
		public $fields= array();
		public $nullable= array();
		public $default_value= array();
		public $ID= 0;
		public $KEY= "";

		function model_product($ID=0){
			$this->ID = $ID;
			$this->KEY = "id";
			$this->fields["id"]="int(11)";
			$this->nullable["id"]="NO";
			$this->default_value["id"]="";
			$this->fields["eng_name"]="varchar(255)";
			$this->nullable["eng_name"]="NO";
			$this->default_value["eng_name"]="";
			$this->fields["fr_name"]="varchar(255)";
			$this->nullable["fr_name"]="NO";
			$this->default_value["fr_name"]="";
			$this->fields["image"]="varchar(255)";
			$this->nullable["image"]="NO";
			$this->default_value["image"]="";
			$this->fields["detail_banner"]="varchar(255)";
			$this->nullable["detail_banner"]="NO";
			$this->default_value["detail_banner"]="";
			$this->fields["slug"]="varchar(500)";
			$this->nullable["slug"]="NO";
			$this->default_value["slug"]="";
			$this->fields["eng_desc"]="text";
			$this->nullable["eng_desc"]="NO";
			$this->default_value["eng_desc"]="";
			$this->fields["fr_desc"]="text";
			$this->nullable["fr_desc"]="NO";
			$this->default_value["fr_desc"]="";
			$this->fields["sort_order"]="int(11)";
			$this->nullable["sort_order"]="NO";
			$this->default_value["sort_order"]="";
			$this->fields["meta_title"]="varchar(255)";
			$this->nullable["meta_title"]="NO";
			$this->default_value["meta_title"]="";
			$this->fields["meta_keyword"]="varchar(255)";
			$this->nullable["meta_keyword"]="NO";
			$this->default_value["meta_keyword"]="";
			$this->fields["meta_description"]="varchar(255)";
			$this->nullable["meta_description"]="NO";
			$this->default_value["meta_description"]="";
			$this->fields["status"]="enum('Inactive','Active')";
			$this->nullable["status"]="NO";
			$this->default_value["status"]="Inactive";
		}
	}
?>