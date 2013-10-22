<?php

$user_model = new usersModel();
$user_model -> createUser($_POST['username'], $_POST['password']);

header("Location: " . $GLOBALS['web_root']);