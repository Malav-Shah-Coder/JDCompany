<?php
class _contact extends controller{

	function init(){

	}

	function onload()
	{
		$obj_model_about_detail=$this->app->load_model('contact_detail');
		$rs_about_page=$obj_model_about_detail->execute("SELECT",false,"","");
		$this->app->assign("contact", $rs_about_page[0]);

		$obj_model_contact_addresses=$this->app->load_model('contact_addresses');
		$contact_addresses=$obj_model_contact_addresses->execute("SELECT",false,"","");
		$this->app->assign("contact_addresses", $contact_addresses);
		
		$this->app->setTitle($rs_about_page[0]['meta_title']);
		$this->app->setKeywords($rs_about_page[0]['meta_keywords']);	
		$this->app->setDescription($rs_about_page[0]['meta_desc']);	
		
		$this->app->setHeadBody($rs_about_page[0]['head_body']);
	}
}
?>