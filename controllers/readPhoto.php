<?php

$photoId = '';

$data = $photoModel->readPhotoInfo($photoId);

$viewModel->getView('views/img_details/body.php', $data);