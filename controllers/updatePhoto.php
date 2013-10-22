<?php

$photoId = '';

$data = $photoModel->readPhotoInfo($photoId);

$viewModel->getView('views/img_update/body.php', $data);
