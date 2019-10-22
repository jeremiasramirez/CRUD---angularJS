<?php 

class DATA{
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

	function get_json_data(){
		$this->conectedDB();

		try{

			$sqlStatement = "SELECT * FROM data";

			$queryExec = mysqli_query($this->conection, $sqlStatement);
            
            $regist = null;
            $counter = 0;

            while($row = mysqli_fetch_array($queryExec)){
                $regist[$counter] = $row;
                $counter +=1;
            }
            echo json_encode(array("data"=> $regist));

		 
		}catch(Exception $e){

			echo json_encode(
                array(
                "err" => $e->getMessage()
            )
        );


		}
 
 		// end method get_json_data()
	}



// end class Database
}
  
 
$data = new DATA();
$data->get_json_data();