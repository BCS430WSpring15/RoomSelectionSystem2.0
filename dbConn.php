<?php
	require 'credentials.php';

	function getConnection(){
		// Create connection
		$connInfo = getCredentials();
		$conn = new mysqli($connInfo['servername'],$connInfo['username'], $connInfo['password']);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		//echo "Connected successfully";
		$db_selected = $conn->query("USE RSS");
		if (!$db_selected) {
		    die ('Can\'t use RSS : ' . mysql_error());
		}
		return $conn;
	}

	/*$sql = "SELECT * FROM `SUITE` WHERE 1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<br>id: " . $row["SuiteID"]. " - Name: " . $row["SuiteType"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	 $conn->close();*/
?>