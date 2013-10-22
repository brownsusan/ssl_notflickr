<?php

$em = $_POST["username"];
$pass = $_POST["password"];

$result = $validate -> validateLogin($em, $pass);

$valid = $logins -> checkUser(array('un' => $em, 'pass' => $pass));

if($valid){
	header("Location: " . $GLOBALS['web_root'] . '?action=photos');
}