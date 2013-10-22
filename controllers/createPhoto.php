<?php

$data = array('file'=>$_POST['upload_file'],'title'=>$_POST['upload_title'], 'desc'=>$_POST['upload_desc']);

$viewModel->getView('views/img_details/body.php', $data);