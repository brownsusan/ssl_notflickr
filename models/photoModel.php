<?

	class photosModel{

		public function readPhoto(){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$st = $db->prepare("select * from albums order by photoId desc");
			$st->execute();
			$obj = $st->fetchAll();
			return $obj;
		}

		public function readPhotoInfo($photoId){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "select * from albums where photoId = :photoId";
			$st = $db->prepare($sql);
			$st->execute(array(":photoId"=>$photoId));
			$obj = $st->fetchAll();
			return $obj;
		}

		public function updatePhoto($photoId, $formInputs){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "update albums set albumName = :albumName";
			$st = $db->prepare($sql);
			$st->execute(array(":photoId"=>$photoId));
		}

		public function deletePhoto($photoId){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "delete from albums where photoId = :photoId";
			$st = $db->prepare($sql);
			$st->execute(array(":photoId"=>$photoId));
		}

		public function createPhoto($data){
			$db = new PDO("mysql:hostname=localhost;dbname=database_ssl_1310","root","root");
			$sql = "insert into  ()";
			$st = $db->prepare($sql);
			$st->execute(array(':'=>$data['']));
		}
	}
?>