<?php
	class ckUser{
		public function checkUser($data){
			session_start();
			$db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");

			$q = "select log_usern, log_pass
				  from users
				  where log_usern = :un and log_pass = :pass";

			$st = $db->prepare($q);

			$st->execute(array(":un"=>$data["un"], ":pass"=>$data["pass"]));

			$st->fetchAll();
			$isgood = $st->rowCount();

			if($isgood > 0){

				$_SESSION["loggedin"] = 1;
				$_SESSION["username"] = $data["un"];
				return 1;

			}else{

				$_session["logggedin"] = 0;
				return 0;

			}
		}
	}
?>