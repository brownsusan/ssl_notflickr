<?

class validationModel{
	
	public function validateLogin(){
		//$loginErr = "";
		$email = $_POST["username_login"];
		$password = $_POST["password_login"];
		$email_match = '/^[a-zA-Z]+[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/';
		$password_match = '/^[a-zA-Z]\w{7,14}$/';
		
		
		if(preg_match($email_match, $email) &&  preg_match($password_match, $password)){
			return true;
		}else{
			//$loginErr = '*You put in the wrong information please try again';
			return false;
			
		}	
	}
}

?>