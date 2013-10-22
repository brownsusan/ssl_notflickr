<?php

$em = $_POST["username"];
$pass = $_POST["password"];

$result = $validate -> validateLogin($em, $pass);

echo $result;