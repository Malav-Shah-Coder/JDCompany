<?
class _detail extends controller{

	function init(){
	}

	function onload()
	{

		$slug=$this->app->getGetVar('slug');
		if($slug=='')
		{
			//$this->app->redirect(SERVER_ROOT);
			//exit;	
		}
		
		$obj_model_product=$this->app->load_model('product');
		$product_detail=$obj_model_product->execute("SELECT",false,"","product.status='Active' and slug='".$slug."'","product.id DESC");
		$this->app->assign("product_detail", $product_detail[0]);
		
		if(count($product_detail)<=0)
		{
			//$this->app->redirect(SERVER_ROOT);
			//exit;
		}
		
		$this->app->setTitle($product_detail[0]['meta_title']);	
		$this->app->setKeywords($product_detail[0]['meta_keyword']);	
		$this->app->setDescription($product_detail[0]['meta_description']);	

		
		$obj_model_product_image=$this->app->load_model('product_image');
		$product_image=$obj_model_product_image->execute("SELECT",false,"","status='Active' and product_id='".$product_detail[0]['id']."'","sort_id ASC");
		$this->app->assign("product_image", $product_image);

		// $obj_model_projects_highlights=$this->app->load_model('projects_highlights');
		// $obj_model_projects_highlights->join_table("highlights", "left", array(), array("highlights_id"=>"id"));
		// $rs_projects_highlights=$obj_model_projects_highlights->execute("SELECT",false,"","projects_id='".$project_id."' and projects_highlights.status='Active'","","");
		// $this->app->assign("rs_projects_highlights", $rs_projects_highlights);
	}
}
?>