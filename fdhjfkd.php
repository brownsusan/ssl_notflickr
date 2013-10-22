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

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$viewModel->getView("views/template/landing-header.php");
	$viewModel->getView("views/landing/body.php");
	$viewModel->getView('views/template/foot.php');
}