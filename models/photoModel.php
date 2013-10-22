<?

	class photosModel{

		public function createPhoto($data){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "insert into images (
				userId,
				title, 
				description,
				filePath
				) values(:userId, :title, :description, :filePath)";
			$st = $db->prepare($sql);
			$st->execute(array(':userId' => $data['userId'], ':title'=>$data['title'], ':description'=>$data['desc'], ':filePath'=>$data['file']));
		}

		public function readPhotos(){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$st = $db->prepare("select * from images order by imageId desc");
			$st->execute();
			$obj = $st->fetchAll();
			return $obj;
		}

		public function readPhotoInfo($imageID){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "select * from images where imageId = :imageID";
			$st = $db->prepare($sql);
			$st->execute(array(":imageID"=>$imageID));
			$obj = $st->fetchAll();
			return $obj;
		}

		public function updatePhoto($file_desc, $imageID){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
            $sql = "update images
                    set filePath = :file_desc
                    where imageId = :imageID";
			$st = $db->prepare($sql);
			$st->execute(array(":file_desc"=>$file_desc,":imageID"=>$imageID));
		}

		public function deletePhoto($imageID){
            $db = new PDO("mysql:hostname=localhost;dbname=notFlickr","root","root");
			$sql = "delete from images where imageId = :imageID";
			$st = $db->prepare($sql);
			$st->execute(array(":imageID"=>$imageID));
		}

	}
?>