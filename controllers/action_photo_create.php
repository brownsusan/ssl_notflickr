<?php

if(is_uploaded_file($_FILES['upload_file']['tmp_name'])){
	move_uploaded_file($_FILES['upload_file']['tmp_name'], 'uploads/' . $_FILES['upload_file']['name']);
}

$data = array('file' => $_FILES['upload_file']['name'], 'userId' => $_SESSION['userId'], 'title'=>$_POST['upload_title'], 'desc'=>$_POST['upload_desc']);

$photoModel->createPhoto($data);

header("Location: " . $GLOBALS['web_root'] . '?action=photos');