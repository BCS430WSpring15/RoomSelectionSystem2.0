<?php
	function getCredentials(){
		$myfile = fopen("connection.txt", "r") or die("Unable to open file!");
		// Output one line until end-of-file
		$servername = trim(fgets($myfile));
		$username = trim(fgets($myfile));
		$password = trim(fgets($myfile));
		fclose($myfile);

		$credentialsInfo = array('servername' => $servername, 'username' => $username, 'password' => $password);
		return $credentialsInfo;
	}
?>