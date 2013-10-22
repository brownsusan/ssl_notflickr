<?

	class photosModel{

		public function readPhoto(){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$st = $db->prepare("select * from images order by imageID desc");
			$st->execute();
			$obj = $st->fetchAll();
			return $obj;
		}

		public function readPhotoInfo($imageID){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "select * from images where imageID = :imageID";
			$st = $db->prepare($sql);
			$st->execute(array(":imgID"=>$imageID));
			$obj = $st->fetchAll();
			return $obj;
		}

		public function updatePhoto($file_desc, $imageID){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
            $sql = "update images
                    set file_desc = :file_desc
                    where imageID = :imageID";
			$st = $db->prepare($sql);
			$st->execute(array(":file_desc"=>$file_desc,":imgID"=>$imageID));
		}

		public function deletePhoto($imageID){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "delete from images where imageID = :imageID";
			$st = $db->prepare($sql);
			$st->execute(array(":imageID"=>$imageID));
		}

		public function createPhoto($data){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "insert into  ()";
			$st = $db->prepare($sql);
			$st->execute(array(':'=>$data['']));
		}
	}
?>