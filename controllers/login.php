<?php

$em = $_POST["username_login"];
$pass = $_POST["password_login"];

$result = $validate -> validateLogin($em, $pass);

echo $result;