<?
class _gallery extends controller {

	function init() {
	}

	function onload()
	{
		$selected_cat_id='';

		$obj_model_about_detail=$this->app->load_model('about_detail');
		$rs_about_page=$obj_model_about_detail->execute("SELECT",false,"","");
		$this->app->assign("about", $rs_about_page[0]);
		
	
		
		$this->app->setHeadBody($rs_about_page[0]['head_body']);

		//load category
		$obj_model_category=$this->app->load_model('csr_category');
		$category=$obj_model_category->execute("SELECT",false,"","status='Active'","sort_id ASC");
		$this->app->assign("category", $category);

		$slug=$this->app->getGetVar('slug');
		foreach($category as $key=>$value) {
			if($slug==$value['slug'])
			{
				$selected_cat_id=$value['id'];
				$setTitle=$value['meta_title'];
				$setKeywords=$value['meta_keywords'];
				$setDescription=$value['meta_desc'];
				$setViewDescription=$value[$_SESSION['lang'].'short_desc'];
			}
		}
		if($slug!='' && $selected_cat_id=='')
		{
			//redirect to home page
			$this->app->redirect(SERVER_ROOT);
		}
		if($selected_cat_id=='')
		{
			$selected_cat_id=$category[0]['id'];
			$setTitle=$category[0]['meta_title'];
			$setKeywords=$category[0]['meta_keywords'];
			$setDescription=$category[0]['meta_desc'];
			$setViewDescription=$category[0][$_SESSION['lang'].'short_desc'];
		}

		//load category
		$obj_model_csr_category_images=$this->app->load_model('csr_category_images');
		$category_images=$obj_model_csr_category_images->execute("SELECT",false,"","status='Active' and csr_category_id='".$selected_cat_id."'","sort_id ASC");
		$this->app->assign("category_images", $category_images);

		$this->app->assign("selected_cat_id", $selected_cat_id);
		$this->app->assign("setViewDescription", $setViewDescription);

		$this->app->setTitle($setTitle);
		$this->app->setKeywords($setKeywords);	
		$this->app->setDescription($setDescription);	
		
	}
}
?>