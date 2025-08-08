<?php
$jsonclass = $app->load_module("Services_JSON");
$obj_JSON = new $jsonclass(SERVICES_JSON_LOOSE_TYPE);
$lang=mysqli_real_escape_string($app->set_db_conn(),$app->getPostVar("lang"));
if($lang!='') {
    if($lang=='eng_')
    {
        $lang_Dis='ENG';
    }
    else
    {
        $lang_Dis='FRE';
    }
    $_SESSION['lang']=$lang;
    $_SESSION['lang_Dis']=$lang_Dis;
    echo $obj_JSON->encode(array("RESULT"=>"1"));
} else {
echo $obj_JSON->encode(array("RESULT"=>"0"));
}
?>