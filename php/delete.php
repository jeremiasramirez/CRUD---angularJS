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
		
			$sqlStatementShow = "SELECT id_data FROM data";
		
			$queryShow = mysqli_query($this->conection, $sqlStatementShow);
			 
			$band = 0;
			while($row = mysqli_fetch_array($queryShow)){
				if($row["id_data"] == $id){
					$band=1;
				}
			 
			}	

			if($band == 1){
				$sqlStatement = "DELETE FROM data WHERE id_data = '$id'";	
				$queryExec = mysqli_query($this->conection, $sqlStatement);

				echo json_encode(array("msj" => "complete"));
				
			}
			else{
				throw new Exception("Not complete");
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