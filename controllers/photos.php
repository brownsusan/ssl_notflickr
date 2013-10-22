<?php

$data = $photoModel->readPhotos();

$viewModel->getView('views/template/app-header.php');
$viewModel->getView('views/photos/body.php', $data);
$viewModel->getView('views/template/foot.php');