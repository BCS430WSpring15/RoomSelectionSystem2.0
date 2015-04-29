<?php
	require 'dbConn.php';
	if (isset($_POST["funct"]) && !empty($_POST["funct"])) {
		if($_POST["funct"] == "VALUSER"){
			validateUserLogin();
		}
		else if($_POST["funct"] == "HOUSINGAPPLICATION"){
			submitHousingApplication();
		}
	}

	function validateUserLogin() {
		$conn = getConnection();
		$username = $_POST["username"];
		$password = $_POST["password"];

    	$sql = 'SELECT * FROM RESIDENCE_DIRECTOR WHERE email = "'.$username.'";';
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    $row = $result->fetch_assoc();
		    $staffID = $row["StaffID"];
		    $sql = 'SELECT * FROM STAFF_PASSWORD WHERE StaffID = '.$staffID.' AND Password = "'.$password.'";';
		    $result = $conn->query($sql);
		    if ($result->num_rows > 0) {
				$arr = array( "returnCode" => "0", "message" => "Success");
				echo json_encode($arr);
			} else {
				$arr = array( "returnCode" => "1", "message" => "Invalid password" );
				echo json_encode($arr); 
			}
		} else{
				$sql = 'SELECT * FROM RESIDENCE_ASSISTANT WHERE email = "'.$username.'";';
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    $row = $result->fetch_assoc();
				    $staffID = $row["StaffID"];
				    $sql = 'SELECT * FROM STAFF_PASSWORD WHERE StaffID = '.$staffID.' AND Password = "'.$password.'";';
				    $result = $conn->query($sql);
				    if ($result->num_rows > 0) {
						$arr = array( "returnCode" => "0", "message" => "Success" );
						echo json_encode($arr);
					} else {
						$arr = array( "returnCode" => "1", "message" => "Invalid password" );
						echo json_encode($arr); 
					}
				} else{
					$sql = 'SELECT * FROM STUDENT WHERE SchoolEMail = "'.$username.'";';
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // output data of each row
					    $row = $result->fetch_assoc();
					    $studentID = $row["StudentID"];
					    $sql = 'SELECT * FROM STUDENT_PASSWORD WHERE StudentID = '.$studentID.' AND Password = "'.$password.'";';
					    $result = $conn->query($sql);
					    if ($result->num_rows > 0) {
							$arr = array( "returnCode" => "0", "message" => "Success" );
							echo json_encode($arr);
						} else {
							$arr = array( "returnCode" => "1", "message" => "Invalid password" );
							echo json_encode($arr); 
						}
					} else{
					$arr = array( "returnCode" => "2", "message" => "User name not found" );
					echo json_encode($arr);
					}
				} 
			}
	}

    function submitHousingApplication(){
    	$conn = getConnection();
    	$date = date("Y-m-d");
		$sql = 'INSERT INTO `HOUSING_APPLICATION` (`StudentID`, `HousingRequestDate`, `EmergencyContact`,`EmergencyContactPhone`,`RoommatePreference`,`Smoke`, `EarlyRiser`, `SleepEarlyAtNight`, `StudyQuietlyLate`,`ConsiderToBeAPerson`, `MedicalConcerns`, `StudentSignature`,`StudentSignatureDate`, `ReleaseInfoToRommate`, `GuardianSignature`,`GuardianSignatureDate`,`PeriodID`) VALUES (1,"'.$date.'","'.$_POST["emergcontact"].'","'.$_POST["emergcontactphone"].'","'.$_POST["roommatepreference"].'","'.$_POST["smoker"].'","'.$_POST["riser"].'","'.$_POST["sleep"].'","'.$_POST["quietly"].'","'.$_POST["consider"].'","'.$_POST["medicalconcerns"].'","'.$_POST["studentsignature"].'","'.$_POST["studentsignaturedate"].'","'.$_POST["releaseinfo"].'","'.$_POST["guardiansignature"].'","'.$_POST["guardiansignaturedate"].'",2);';
		$result = $conn->query($sql);
		if (!$result) {
			$arr = array( "returnCode" => "1", "message" => $conn->error );
			echo json_encode($arr);
		} else {
			$arr = array("returnCode" => "0", "message" => "Success" );
			echo json_encode($arr);
		}
	}
?>