<?php 

class DELETE{
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

	function get_json_data($id){
		$this->conectedDB();

		try{
			$sqlStatement = "DELETE FROM data WHERE id_data = '$id'";

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
  
 $id = $_GET["id"];
 
 if(!empty($id)){

	$postdata = new DELETE();
	$postdata->get_json_data($id);

 }
 else{
	 echo json_encode(array("msj"=>"value empty"));
 }