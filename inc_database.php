<?php
	
	
	//Global variables for creating connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "flyhigh";
	$result; // stores the result
	
	// Connect to MySQL and Create connection to connect to database
	$connection = new mysqli($servername, $username, $password, $dbname); 
	
	// Check connection 
	if($connection->errno) {
		("Connection failed: " . $connection->connect_error); // if connection fails display error
		echo "DBMS Connection failed - errno: " . $connection->errno . PHP_EOL;
		echo "LOL";
		die("DBMS Connection failed - error: " . $connection->error . PHP_EOL);
	} // end if 
	
	function runQuery($sql){
		global $result, $connection;
		try {
			//echo("<script>console.log('PHP: ".$sql."');</script>");
			if(!($result = $connection->query($sql))) { //send the sql 
				throw new Exception("Select Query Failed " . $connection->error);
			}
		}
		catch(Exception $e) {
			die("Error: " . $e->getMessage()); // catch error 
		} //end try catch
		//$connection->close(); //connection closed. 
	}//end function runquery
?> 