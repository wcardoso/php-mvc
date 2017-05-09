<?php
//Criar exeções para erro.
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//função para conectar ao banco





function o_db(){

	try {

		 $connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		 return $connection;
	} catch (Exception $e) {
		echo $e->getMessage();
		return null;
		
	}
}

//função para desconectar ao banco

function c_db($connection){
	try { 

		mysqli_close($connection);

	} catch (Exception $e){

	echo $e->getMessage();

	}
}




function find($table = null, $id = null){
	$database = o_db();
	$found = null;

	try {
		if($id){
			$sql = "SELECT * FROM".$table."WHERE id=".$id;
			$result = $database->query($sql);
			if ($result->num_rows > 0) {
				$found = $result->fetch_assoc();
			}
		}else {
			$sql = "SELECT * FROM".$table;
			$result = $database->query($sql);

			if ($result-> num_rows>0) {
				$found = $result -> fetch_all(MYSQLI_ASSOC);
						}

		}
		
	} catch (Exception $e) {

		$_SESSION['message'] = $e-> getMessage();
		$_SESSION['type'] = 'danger';
	}
	close_database($database);
	return $found;
}



?>

