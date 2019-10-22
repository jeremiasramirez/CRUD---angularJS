<?php 

class POSTED{
	private $host = "127.0.0.1";
	private $user = "jere";
	private $pass = "0847";
	private $dbname = "insercion";
	private $conection =null;

	function conectedDB(){

		try{

			$this->conection = new mysqli(
				
				$this->host,
				$this->user,
				$this->pass,
				$this->dbname);


			if(mysqli_connect_error($this->conection)){

				// launch exception
				throw new Exception("Error in db");
			}


			// get exception
		}catch(Exception $e){

			// show exception message
			echo $e->getMessage();
		}
		return $this->conection;


	}

	function get_json_data($name, $lastname){
		$this->conectedDB();

		try{
			$sqlStatement = "INSERT INTO data (name, lastname) VALUES ('$name', '$lastname')";

			$queryExec = mysqli_query($this->conection, $sqlStatement);
			if(!$queryExec){
				throw new Exception("Not complete");
			}
			else{
				echo json_encode(array("msj" => "complete"));
			}
		 
		}catch(Exception $e){
			echo json_encode(array("err" => $e->getMessage()));
		}
 
 		// end method get_json_data()
	}



// end class Database
}
  
 $name = $_GET["name"];

 $lastname = $_GET["lastname"];

 if(  !empty($name) && !empty($lastname) ){

	$postdata = new POSTED();
	$postdata->get_json_data($name, $lastname);

 }
 else{
	 $name = "";
	 $lastname = "";
	 echo json_encode(array("msj"=>"value empty"));
 }