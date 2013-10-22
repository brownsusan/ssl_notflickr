<?php

$data = array("un"=>$_POST["username"],"pass"=>md5($_POST["password"]));
$test = $logins->checkUser($data);
$msg="Invalid Login";

// $em = $_POST["username_login"];
// $pass = $_POST["password_login"];
if($test == 1){

	$viewModel->getView("views/template/app-header.php");
	$viewModel->getView("views/img_create/upload.php");
	$viewModel->getView("views/template/foot.php");

}else{	

	$viewModel->getView("views/template/landing-header.php");
	$viewModel->getView("views/landing/body.php");
	$viewModel->getView("views/template/foot.php");

}