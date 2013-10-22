<?php

$data = $photoModel->readPhoto();

$viewModel->getView('views/browse/body.php', $data);