<?

	class usersModel{

		public function createUser($user_name, $user_password){

            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "insert into users (username, password) values (:user_name, :user_password)";
			$st = $db->prepare($sql);
			$st->execute(array(":user_name"=>$user_name, ":user_password"=>md5($user_password)));
			//$st->execute();
		}

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
			$sql = "update users set username = :user_name, password = :user_password where userId = :user_id";
			$st = $db->prepare($sql);
			$st->execute(array(":user_name"=>$uname, ":user_password"=>md5($upass), ":user_id"=>$userID));
		}

		public function deleteUser($userID){

            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "delete from users where userId = :user_id";
			$st = $db->prepare($sql);
			$st->execute(array(":user_id"=>$userID));
		}


	}