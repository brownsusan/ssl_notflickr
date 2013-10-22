<?

require_once 'models/viewModel.php';
require_once 'models/validationModel.php';
require_once 'models/usersModel.php';
require_once 'models/photoModel.php';
require_once 'models/checkLoginModel.php';

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
}if($action == "action_user_create"){

    echo "testing";

} else {

	if (file_exists('../controllers/' . $action . '.php')) {
		require '../controllers/' . $action . '.php';
	} else {
		require '../controllers/error_404.php';
	}
}
