<?php
	class ckUser{
		public function checkUser($data){
			
			$db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");

			$q = "select userId, username, password
				  from users
				  where username = :un and password = :pass";

			$st = $db->prepare($q);

			$st->execute(array(":un"=>$data["un"], ":pass"=>md5($data["pass"])));

			$user = $st->fetch();
			$isgood = $st->rowCount();

			if($isgood > 0){

				$_SESSION["loggedin"] = 1;
				$_SESSION['userId'] = $user['userId'];
				$_SESSION["username"] = $data["un"];
				return 1;

			}else{

				$_session["logggedin"] = 0;
				return 0;
			}
		}
	}
?>