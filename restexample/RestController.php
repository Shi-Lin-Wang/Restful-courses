<?php
require_once("courseRestHandler.php");
		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];

switch($view){

	case "all":
		// 處理 REST Url /site/list/
		$courseRestHandler = new CourseRestHandler();
		$courseRestHandler->getAllCourses();
		break;
		
	case "single":
		// 處理 REST Url /site/show/<id>/
		$courseRestHandler = new CourseRestHandler();
		$courseRestHandler->getCourses($_GET["id"]);
		break;

	case "" :
		//404 - not found;
		break;
}
?>