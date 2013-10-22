<?

	class usersModel{

		public function getUsers(){

            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$st = $db->prepare("select * from users");
			$st->execute();
			$obj = $st->fetchAll();
			return $obj;
		}

		public function getUserInfo($userID){

            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "select * from users where userId = :userID";
			$st = $db->prepare($sql);
			$st->execute(array(":userID"=>$userID));
			$obj = $st->fetchAll();
			return $obj;
		}

		public function updateUser($userID=0,$uname='',$upass=''){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "update users set log_user = :user_name, log_pass = :user_password where userID = :user_id";
			$st = $db->prepare($sql);
			$st->execute(array(":user_name"=>$uname, ":user_password"=>$upass, ":user_id"=>$userID));
		}

		public function deleteUser($userID){

			echo $user_id;

            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "delete from users where userID = :user_id";
			$st = $db->prepare($sql);
			$st->execute(array(":user_id"=>$userID));
		}

		public function createUser($user_name, $user_password){

			echo $user_name;
			echo $user_password;

            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "insert into users (log_user, log_pass) values (:user_name, :user_password)";
			$st = $db->prepare($sql);
			$st->execute(array(":user_name"=>$user_name, ":user_password"=>$user_password));
			//$st->execute();
		}
	}