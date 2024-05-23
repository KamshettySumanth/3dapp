<?php
class Model {
	public $dbhandle;
	
	public function __construct()
	{
		$dsn = 'sqlite:./db/test1.db';
		
		try {	
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
		}
		catch (PDOEXception $e) {
			echo "I'm sorry. I'm afraid I can't connect to the database!";
        	print new Exception($e->getMessage());
    	}
	}
	public function dbDeleteTable(){
		try {
			$this->dbhandle->exec('DROP TABLE IF EXISTS "ModelContent3D"');
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE ModelContent3D (Id INTEGER PRIMARY KEY, name TEXT, title1 TEXT, title2 TEXT, description TEXT, description2 TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbInsertData()
	{
		$sql = "INSERT INTO ModelContent3D (Id, name, title1, title2, description,description2) VALUES (?, ?, ?, ?, ?,?)";
		$stmt = $this->dbhandle->prepare($sql);

		$data = [
			[1, 'Coca Cola X3D Model', 'Coca Cola', 'New York Harbour, 1886', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!','This 3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted to X3D using view3Dscene application for display online.'],
			[2, 'Sprite X3D Model', 'Sprite', 'West Germany, 1959', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world\'s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories','This 3D model of the sprite bottle has been created in 3ds Max, exported to VRML97 and converted to X3D using view3Dscene application for display online.'],
			[3, 'Pepper X3D Model', 'Dr Pepper', 'Texas, 1885', 'Dr Pepper is unique, sparkling blend of 23 fruit flavours has been around for well over a century and it is still the same, with that distinctive flavour you just can not quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.','This 3D model of the dr pepper can has been created in 3ds Max, exported to VRML97 and converted to X3D using view3Dscene application for display online.']
		];

		try {
			foreach ($data as $row) {
				$stmt->execute($row);
			}
			echo "Data inserted successfully!";
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		$this->dbhandle = NULL;
	}
	public function dbGetData(){
		try {
			$sql = 'SELECT * FROM ModelContent3D';
			$stmt = $this->dbhandle->query($sql);
			$result = [];
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
						
			return $result;
		} catch (PDOException $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return [];
		
	}
}
?>