<?

class validationModel{
	
	public function validateLogin($em, $pass){
		//$loginErr = "";
		$username = $em;
		$password = $pass;
		$password_match = '/^[a-zA-Z]\w{7,14}$/';
		
		if(preg_match($password_match, $password)){
			return true;
		}else{
			//$loginErr = '*You put in the wrong information please try again';
			return false;
			
		}	

	}
}

?>