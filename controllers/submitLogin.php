<?php

$em = $_POST["username"];
$pass = $_POST["password"];

$result = $validate -> validateLogin($em, $pass);

if($result == true){
	require 'controllers/checklogin.php';
}