<?
class _about extends controller {

	function init() {
	}

	function onload()
	{
		$obj_model_about_detail=$this->app->load_model('about_detail');
		$rs_about_page=$obj_model_about_detail->execute("SELECT",false,"","");
		$this->app->assign("about", $rs_about_page[0]);
		
		$this->app->setTitle($rs_about_page[0]['meta_title']);
		$this->app->setKeywords($rs_about_page[0]['meta_keywords']);	
		$this->app->setDescription($rs_about_page[0]['meta_desc']);	
		
		$this->app->setHeadBody($rs_about_page[0]['head_body']);

		//gallery
		$obj_model_images=$this->app->load_model('csr_category_images');
		$images=$obj_model_images->execute("SELECT",false,"","status='Active' and set_at_about='Yes'","sort_id desc limit 0,20");
		$this->app->assign("images", $images);
			
	}
}
?>