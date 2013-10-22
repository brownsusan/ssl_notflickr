<?php

session_start();
$_SESSION["loggedin"] = 0;
//$data = "<a href='?action=userlogin'>LOGIN</a>";
$viewModel->getView("views/template/landing-header.php");
	$viewModel->getView("views/landing/body.php");
	$viewModel->getView("views/template/foot.php");
session_destroy();
