<?
session_start();

require_once 'libs/viewModel.php';
require_once 'libs/validationModel.php';
require_once 'libs/checkLoginModel.php';

require_once 'models/usersModel.php';
require_once 'models/photoModel.php';

$viewModel = new viewModel();
$validate = new validationModel();
$logins = new ckUser();

$userModel = new usersModel();
$photoModel = new photosModel();

$GLOBALS['web_root'] = '/ssl_notflickr/';

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = "";
}

if ($action == "") {
	require 'controllers/main.php';
}else {

	if (file_exists('controllers/' . $action . '.php')) {
		require 'controllers/' . $action . '.php';
	} else {
		require 'controllers/error_404.php';
	}
}
