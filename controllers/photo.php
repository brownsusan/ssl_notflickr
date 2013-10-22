<?php

$photoId = $_GET['photo_id'];

$data = $photoModel->readPhotoInfo($photoId);

$viewModel->getView('views/template/app-header.php');
$viewModel->getView('views/photo/body.php', $data);
$viewModel->getView('views/template/foot.php');