<?php
	class model_testimonial{
		public $fields= array();
		public $nullable= array();
		public $default_value= array();
		public $ID= 0;
		public $KEY= "";

		function model_testimonial($ID=0){
			$this->ID = $ID;
			$this->KEY = "id";
			$this->fields["id"]="int(11)";
			$this->nullable["id"]="NO";
			$this->default_value["id"]="";
			$this->fields["image"]="varchar(255)";
			$this->nullable["image"]="NO";
			$this->default_value["image"]="";
			$this->fields["eng_name"]="varchar(255)";
			$this->nullable["eng_name"]="NO";
			$this->default_value["eng_name"]="";
			$this->fields["fr_name"]="varchar(255)";
			$this->nullable["fr_name"]="NO";
			$this->default_value["fr_name"]="";
			$this->fields["sort_id"]="int(11)";
			$this->nullable["sort_id"]="NO";
			$this->default_value["sort_id"]="";
			$this->fields["status"]="varchar(100)";
			$this->nullable["status"]="NO";
			$this->default_value["status"]="";
			$this->fields["added_on"]="varchar(100)";
			$this->nullable["added_on"]="NO";
			$this->default_value["added_on"]="";
			$this->fields["eng_position"]="varchar(255)";
			$this->nullable["eng_position"]="NO";
			$this->default_value["eng_position"]="";
			$this->fields["fr_position"]="varchar(255)";
			$this->nullable["fr_position"]="NO";
			$this->default_value["fr_position"]="";
			$this->fields["eng_text"]="varchar(255)";
			$this->nullable["eng_text"]="NO";
			$this->default_value["eng_text"]="";
			$this->fields["fr_text"]="varchar(255)";
			$this->nullable["fr_text"]="NO";
			$this->default_value["fr_text"]="";
		}
	}
?>