<?php

	$userModel -> delete($_GET['prid']);
	$data = $userModel -> getProduct();
