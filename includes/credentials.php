<?php
    	
    function db_connect() {
      	
      	$myHostName = "localhost";
		$myUserName = "[UserName]";
		$myPassword = "[Password]";
		$myDatabase = "[DatabaseName]";
      
    	$myConn = mysqli_connect($myHostName, $myUserName, $myPassword, $myDatabase) or die(myerror(__FILE__,__LINE__,mysql_error()));
      	if (!$myConn) {
    		echo "Error: Unable to connect to MySQL." . PHP_EOL;
    		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    		exit;
		}
    	//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
		//echo "Host information: " . mysqli_get_host_info($myConn) . PHP_EOL;
      
        return $myConn;
    }
?>
