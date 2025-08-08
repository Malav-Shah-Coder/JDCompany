<?
class _home extends controller {

	function init(){
	}

	function onload()
	{
		$obj_model_home_detail=$this->app->load_model('home_detail');
		$rs_home=$obj_model_home_detail->execute("SELECT",false,"","");
		$this->app->assign("home", $rs_home[0]);
		
		$this->app->setTitle($rs_home[0]['meta_title']);
		$this->app->setKeywords($rs_home[0]['meta_keywords']);	
		$this->app->setDescription($rs_home[0]['meta_desc']);	
		$this->app->setHeadBody($rs_home[0]['head_body']);
		
		
		$obj_model_banner=$this->app->load_model('banner');
		$re_banner=$obj_model_banner->execute("SELECT",false,"","status='Active'","sort_id ASC");
		$this->app->assign("banner", $re_banner);

		$obj_model_testimonial=$this->app->load_model('testimonial');
		$re_testimonial=$obj_model_testimonial->execute("SELECT",false,"","status='Active'","sort_id ASC");
		$this->app->assign("testimonial", $re_testimonial);
	}
}
?>