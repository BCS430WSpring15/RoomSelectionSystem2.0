 <?php
	require 'dbConn.php';
	session_start();
	/*
		userType in session
		1- RESIDENCE_DIRECTOR
		2- RESIDENCE_ASSISTANT
		3- STUDENT
	*/
	if (isset($_POST["funct"]) && !empty($_POST["funct"])) {
		if($_POST["funct"] == "VALUSER"){
			validateUserLogin();
		}
		else if($_POST["funct"] == "HOUSINGAPPLICATION"){
			submitHousingApplication();
		}
		else if($_POST["funct"] == "BEGININGHOUSINGAPPLICATION"){
			submitBeginingHousingApplication();
		}
		else if($_POST["funct"] == "ROOMSELECTIONFORM"){
			submitRoomSelectionForm();
		}
		else if($_POST["funct"] == "RETRIEVEFLOORS"){
			retrieveFloors();
		}
		else if($_POST["funct"] == "RETRIEVESUITES"){
			retrieveSuites();
		}
		else if($_POST["funct"] == "RETRIEVEROOMS"){
			retrieveRooms();
		}
		else if($_POST["funct"] == "SUBMITROOMSELECTIONSINGLE"){
			submitRoomSelectionSingle();
		}
		else if($_POST["funct"] == "CHECKUSER"){
			checkUser();
		}
		else if($_POST["funct"] == "SUBMITNEWPASSWORD"){
			submitNewPassword();
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
		    $sql = 'SELECT * FROM STAFF_PASSWORD WHERE StaffID = '.$staffID.' AND Password = "'.md5($password).'";';
		    $result = $conn->query($sql);
		    if ($result->num_rows > 0) {
		    	$_SESSION["userType"] = "1";
		    	$_SESSION["user"] = $row;
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
				    $sql = 'SELECT * FROM STAFF_PASSWORD WHERE StaffID = '.$staffID.' AND Password = "'.md5($password).'";';
				    $result = $conn->query($sql);
				    if ($result->num_rows > 0) {
				    	$_SESSION["userType"] = "2";
		    			$_SESSION["user"] = $row;
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
					    $sql = 'SELECT * FROM STUDENT_PASSWORD WHERE StudentID = '.$studentID.' AND Password = "'.md5($password).'";';
					    $result = $conn->query($sql);
					    if ($result->num_rows > 0) {
					    	$_SESSION["userType"] = "3";
		    				$_SESSION["user"] = $row;
					    	$sql = 'SELECT * FROM `HOUSING_APPLICATION` WHERE `StudentID` = "'.$studentID.'"';
					    	$result = $conn->query($sql);
					    	if(!$result){
					    		$arr = array( "returnCode" => "5", "message" => $conn->error );
								echo json_encode($arr);
					    	} else {
					    		if ($result->num_rows > 0) {
					    			$_SESSION["isNew"] = "false";
					    			$arr = array( "returnCode" => "0", "message" => "Success", "isNew" => "false");
									echo json_encode($arr);
					    		} else {
					    			$_SESSION["isNew"] = "true";
					    			$arr = array( "returnCode" => "0", "message" => "Success", "isNew" => "true");
									echo json_encode($arr);
					    		}
					    	}
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
    	if($_POST["emergcontact"] == "" || $_POST["emergcontactphone"] == "" || (!isset($_POST["smoker"]) && empty($_POST["smoker"])) || (!isset($_POST["riser"]) && empty($_POST["riser"])) || (!isset($_POST["sleep"]) && empty($_POST["sleep"])) || (!isset($_POST["quietly"]) && empty($_POST["quietly"])) || (!isset($_POST["consider"]) && empty($_POST["consider"])) || $_POST["studentsignature"] == "" || $_POST["studentsignaturedate"] == ""){
    		$arr = array( "returnCode" => "3", "message" => "Missing required fields" );
			echo json_encode($arr);
			exit();
    	}

    	$conn = getConnection();
    	$date = date("Y-m-d");
		$sql = 'INSERT INTO `HOUSING_APPLICATION` (`StudentID`, `HousingRequestDate`, `EmergencyContact`,`EmergencyContactPhone`,`RoommatePreference`,`Smoke`, `EarlyRiser`, `SleepEarlyAtNight`, `StudyQuietlyLate`,`ConsiderToBeAPerson`, `MedicalConcerns`, `StudentSignature`,`StudentSignatureDate`, `ReleaseInfoToRommate`, `GuardianSignature`,`GuardianSignatureDate`,`PeriodID`) VALUES ("'.$_SESSION["user"]["StudentID"].'","'.$date.'","'.$_POST["emergcontact"].'","'.$_POST["emergcontactphone"].'","'.$_POST["roommatepreference"].'","'.$_POST["smoker"].'","'.$_POST["riser"].'","'.$_POST["sleep"].'","'.$_POST["quietly"].'","'.$_POST["consider"].'","'.$_POST["medicalconcerns"].'","'.$_POST["studentsignature"].'","'.$_POST["studentsignaturedate"].'","'.$_POST["releaseinfo"].'","'.$_POST["guardiansignature"].'","'.$_POST["guardiansignaturedate"].'",2);';
		$result = $conn->query($sql);
		if (!$result) {
			$arr = array( "returnCode" => "1", "message" => $conn->error );
			echo json_encode($arr);
		} else {
			$_SESSION["isNew"] = "false";
			$arr = array("returnCode" => "0", "message" => "Application submited successfully" );
			echo json_encode($arr);
		}
	}

	function submitBeginingHousingApplication(){
		/*foreach($_POST as $key=>$value){
			$arr["$key"] = "$value";
		}*/
		//Check if exists first
		if($_POST["name"] == "" || $_POST["RAM_ID"] == "" || $_POST["address_street"] == "" || $_POST["cell_phone"] == "" || $_POST["address_state"] == "" || $_POST["birthdate"] == "" || $_POST["gender"] == "" || $_POST["email"] == "" || $_POST["password"] == "" || $_POST["confirmPass"] == "" || $_POST["securityQuestionID"] == "-1" || $_POST["securityQuestionAnswer"] == ""){
			$arr = array( "returnCode" => "3", "message" => "Missing required fields" );
			echo json_encode($arr);
			exit();
		}
		if($_POST["password"] != $_POST["confirmPass"]){
			$arr = array( "returnCode" => "2", "message" => "Passwords must match" );
			echo json_encode($arr);
			exit();
		}
		$conn = getConnection();
		$name_last_name = $pieces = explode(",", $_POST["name"]);
		$address = $_POST["address_street"].", ".$_POST["address_state"];
		$email = $_POST["email"]."@farmingdale.edu";
		$personalEmail = 'NULL';
		if($_POST["personalEmail"] != ""){
			$personalEmail = '"'.$_POST["personalEmail"].'"';
		}
		$sql = 'INSERT INTO `STUDENT` (`FirstName`, `LastName`, `RamID`, `CellPhone`, `HomePhone`, `DateOfBirth`, `Gender`, `Address`, `SchoolEMail`, `PersonalEMail`) VALUES ("'.$name_last_name[1].'","'.$name_last_name[0].'", "'.$_POST["RAM_ID"].'", "'.$_POST["cell_phone"].'","'.$_POST["home_phone"].'","'.$_POST["birthdate"].'","'.$_POST["gender"].'","'.$address.'","'.$email.'", '.$personalEmail.');';
		$result = $conn->query($sql);
		if (!$result) {
			$arr = array( "returnCode" => "1", "message" => $conn->error );
			echo json_encode($arr);
		} else {
			$studentID = $conn->insert_id;
			$sql = 'INSERT INTO `STUDENT_PASSWORD` (`StudentID`, `SecurityQuestionID`, `Password`, `SecurityAnswer`) VALUES ("'.$studentID.'", "'.$_POST["securityQuestionID"].'", "'.md5($_POST["password"]).'", "'.$_POST["securityQuestionAnswer"].'");';
			$result = $conn->query($sql);
			if (!$result) {
				$arr = array( "returnCode" => "1", "message" => $conn->error );
			} else{
				$arr = array("returnCode" => "0", "message" => "Application submited successfully" );
			}
			echo json_encode($arr);
		}
	}

	function submitRoomSelectionForm(){
		//$arr = array( "returnCode" => "55", "message" => "Some message" );
		/*foreach($_POST as $key=>$value){
			$arr["$key"] = "$value";
		}*/
		/*$conn = getConnection();
		if($_POST["isproxyoption"] == "0" && $_POST["rommatei"] == ""){
			$periodID = "";
			$roomID = "";
			$periodDescription = "";
			$sql = 'SELECT * FROM `PERIOD` WHERE `IsCurrent` = 1;';
			$result = $conn->query($sql);
			if (!$result) {
				$arr = array( "returnCode" => "1", "message" => $conn->error );
				echo json_encode($arr);
				exit();
			} else {
				if ($result->num_rows > 0) {
			    	$row = $result->fetch_assoc();
			    	$periodID = $row["PeriodID"];
			    	$periodDescription = $row["Description"];
				}
				else{
					$arr = array( "returnCode" => "2", "message" => "No PERIOD found" );
					echo json_encode($arr);
					exit();
				}
			}
			$sql = 'SELECT * FROM `ROOM` WHERE `RoomNumber` = "'.$_POST["preferencei"].'";';
			$result = $conn->query($sql);
			if (!$result) {
				$arr = array( "returnCode" => "1", "message" => $conn->error );
				echo json_encode($arr);
				exit();
			} else {
				if ($result->num_rows > 0) {
			    	$row = $result->fetch_assoc();
			    	$roomID = $row["RoomID"];
				}
				else{
					$arr = array( "returnCode" => "2", "message" => "No PERIOD found" );
					echo json_encode($arr);
					exit();
				}
			}

			$sql = 'SELECT * FROM `PERIOD_ROOM_STUDENT` WHERE `RoomID` = "'.$roomID.'";';
			$result = $conn->query($sql);
			if (!$result) {
				$arr = array( "returnCode" => "1", "message" => $conn->error );
				echo json_encode($arr);
				exit();
			} else {
				if ($result->num_rows > 0) {
			    	$arr = array( "returnCode" => "5", "message" => "Room Not Available" );
					echo json_encode($arr);
					exit();
				}
			}

			$sql = 'INSERT INTO `ROOM_SELECTION_FORM` (`StudentID`, `SuiteRoom1`, `CurrentSemester`, `AssisgmentFollowingSemester`, `Signature`, `SignatureDate`) VALUES ("1", "'.$_POST["preferencei"].'", "'.$periodDescription.'", "'.$_POST["preferencei"].'", "PENDING", "000-00-00");';
			$result = $conn->query($sql);
			if (!$result) {
				$arr = array( "returnCode" => "3", "message" => $conn->error );
				echo json_encode($arr);
				exit();
			} 
			$sql = 'INSERT INTO `PERIOD_ROOM_STUDENT` (`PeriodID`, `RoomID`, `StudentID`) VALUES ("'.$periodID.'", "'.$roomID.'", "1");';
			$result = $conn->query($sql);
			if (!$result) {
				$arr = array( "returnCode" => "4", "message" => $conn->error );
				echo json_encode($arr);
			} else{
				$arr = array("returnCode" => "0", "message" => "Success" );
				echo json_encode($arr);
			}
		}
		if($_POST["isproxyoption"] == "1" && $_POST["rommatei"] == ""){
			$periodID = "";
			$roomID = "";
			$periodDescription = "";
		}*/
	}

	function retrieveFloors(){
		/*foreach($_POST as $key=>$value){
			$arr["$key"] = "$value";
		}*/
		$conn = getConnection();
		$sql = 'SELECT `NumberOfFloors` FROM `BUILDING` WHERE `BuildingID` = "'.$_POST["buildingID"].'";';
		$result = $conn->query($sql);
		if (!$result) {
			$arr = array( "returnCode" => "1", "message" => $conn->error );
			echo json_encode($arr);
		} else {
			$arr = array("returnCode" => "0", "message" => "Success" );
			if ($result->num_rows > 0) {
			    $row = $result->fetch_assoc();
			    $numberOfRooms = $row["NumberOfFloors"];
			    $arr["numberOfRooms"] = $numberOfRooms;
			}
			echo json_encode($arr);
		}
	}

	function retrieveSuites(){
		$conn = getConnection();
		$sql = 'SELECT S.`SuiteID`, S.`SuiteType` FROM `ROOM` R JOIN `SUITE` S ON R.`SuiteID` = S.`SuiteID` WHERE `BuildingID` = "'.$_POST["buildingID"].'" AND `Floor` = "'.$_POST["floorNumber"].'" GROUP BY S.`SuiteType`;';
		$result = $conn->query($sql);
		if (!$result) {
			$arr = array( "returnCode" => "1", "message" => $conn->error );
			echo json_encode($arr);
		} else {
			$arr = array("returnCode" => "0", "message" => "Success" );
			$arr["length"] = $result->num_rows;
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$suiteID = $row["SuiteID"];
					$suiteType = $row["SuiteType"];
			        $arr["suites"]["$suiteID"] = $suiteType;
			    }
			}
			echo json_encode($arr);
		}
	}
	function retrieveRooms(){
		$conn = getConnection();
		$room_period_student = array();
		$rooms_in_room_period_student = array();
		$arr = array();
		$sql = 'SELECT `RoomID`, `RoomNumber` FROM `ROOM` WHERE `BuildingID` = "'.$_POST["buildingID"].'" AND `Floor` = "'.$_POST["floorNumber"].'" AND `SuiteID` = "'.$_POST["suiteType"].'"  AND `RoomID` NOT IN (SELECT `RoomID` FROM `PERIOD_ROOM_STUDENT` WHERE `PeriodID` = (SELECT `PeriodID` FROM `PERIOD` WHERE `IsCurrent` = 1));';
		$result = $conn->query($sql);
		if (!$result) {
			$arr = array( "returnCode" => "1", "message" => $conn->error );
			echo json_encode($arr);
			exit();
		} else {
			$arr = array("returnCode" => "0", "message" => "Success" );
			$arr["length"] = $result->num_rows;
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$roomID = $row["RoomID"];
					$roomNumber = $row["RoomNumber"];
			        $arr["rooms"]["$roomID"] = $roomNumber;
			    }
			}
		}
		$sql = 'SELECT `RoomID`, COUNT(*) AS `Count` FROM `PERIOD_ROOM_STUDENT` WHERE `PeriodID` = (SELECT `PeriodID` FROM `PERIOD` WHERE `IsCurrent` = 1) GROUP BY `RoomID`;';
		$result = $conn->query($sql);
		if (!$result) {
			$arr["returnCode"] = "1";
			$arr["message"] = $conn->error;
			echo json_encode($arr);
		} else {
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$roomID = $row["RoomID"];
					$room_period_student["$roomID"] = $row["Count"];
			    }
			    $sql = 'SELECT `RoomID`, `RoomNumber`, `AmountOfPeople` FROM `ROOM` WHERE `BuildingID` = "'.$_POST["buildingID"].'" AND `Floor` = "'.$_POST["floorNumber"].'" AND `SuiteID` = "'.$_POST["suiteType"].'"  AND `RoomID` IN (SELECT `RoomID` FROM `PERIOD_ROOM_STUDENT` WHERE `PeriodID` = (SELECT `PeriodID` FROM `PERIOD` WHERE `IsCurrent` = 1));';
			    $result = $conn->query($sql);
			    if (!$result) {
					$arr["returnCode"] = "1";
					$arr["message"] = $conn->error;
					echo json_encode($arr);
				}  else {
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$roomID = $row["RoomID"];
							$rooms_in_room_period_student["$roomID"] = array("RoomNumber" => $row["RoomNumber"], "AmountOfPeople" =>  $row["AmountOfPeople"]);
					    }
					}
				}
			}
			foreach($room_period_student as $key=>$value){
				if(isset($rooms_in_room_period_student["$key"])){
					if($value < $rooms_in_room_period_student["$key"]["AmountOfPeople"]){
						$arr["rooms"]["$key"] = $rooms_in_room_period_student["$key"]["RoomNumber"];
					}
				}
			}
		}
		echo json_encode($arr);
	}

	function submitRoomSelectionSingle(){
		$conn = getConnection();
		$studentID = "";
		$redirectTo = "";
		if($_SESSION["userType"] == "1" && isset($_POST["studentID"]) && !empty($_POST["studentID"])){
			$studentID = $_POST["studentID"];
			$redirectTo = "add_room.php";
		} else if($_SESSION["userType"] == "3") {
			$studentID = $_SESSION["user"]["StudentID"];
			$redirectTo = "home.php";
		}
		$sql = 'INSERT INTO `PERIOD_ROOM_STUDENT` (`PeriodID`, `RoomID`, `StudentID`) VALUES ((SELECT `PeriodID` FROM `PERIOD` WHERE `IsCurrent` = 1), "'.$_POST["roomID"].'", "'.$studentID.'");';
		$result = $conn->query($sql);
		if (!$result) {
			$arr = array( "returnCode" => "1", "message" => $conn->error );
			echo json_encode($arr);
			exit();
		} else {
			$arr = array("returnCode" => "0", "message" => "Room selected successfully", "redirectTo" => $redirectTo );
			echo json_encode($arr);
		}
	}
	function checkUser(){
		$username = $_POST["username"];
		$conn = getConnection();
		$sql = 'SELECT Q.`Question` FROM `STAFF` S JOIN `SECURITY_QUESTION` Q ON S.`SecurityQuestionID` = Q.`SecurityQuestionID` WHERE S.`StaffID` = (SELECT `StaffID` FROM `RESIDENCE_DIRECTOR` WHERE `Email` = "'.$username.'");';
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    $row = $result->fetch_assoc();
	    	$question = $row["Question"];
			$arr = array( "returnCode" => "0", "message" => "Success", "question" => $question, "fromTable" => "1");
			//fromTable => "1" meaning it was found in the RESIDENCE_DIRECTOR table
			echo json_encode($arr);
			exit();
		}

		$sql = 'SELECT Q.`Question` FROM `STAFF` S JOIN `SECURITY_QUESTION` Q ON S.`SecurityQuestionID` = Q.`SecurityQuestionID` WHERE S.`StaffID` = (SELECT `StaffID` FROM `RESIDENCE_ASSISTANT` WHERE `Email` = "'.$username.'");';
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
	    	$question = $row["Question"];
			$arr = array( "returnCode" => "0", "message" => "Success", "question" => $question, "fromTable" => "2");
			//fromTable => "2" meaning it was found in the RESIDENCE_ASSISTANT table
			echo json_encode($arr);
			exit();
		}

		$sql = 'SELECT Q.`Question` FROM `STUDENT_PASSWORD` S JOIN `SECURITY_QUESTION` Q ON S.`SecurityQuestionID` = Q.`SecurityQuestionID` WHERE S.`StudentID` = (SELECT `StudentID` FROM `STUDENT` WHERE `SchoolEMail` = "'.$username.'");';
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
	    	$question = $row["Question"];
			$arr = array( "returnCode" => "0", "message" => "Success", "question" => $question, "fromTable" => "3");
			//fromTable => "3" meaning it was found in the STUDENT table
			echo json_encode($arr);
			exit();
		} else {
			$arr = array( "returnCode" => "1", "message" => "User name not found" );
			echo json_encode($arr);
		}
	}

	function submitNewPassword(){
		$fromTable = $_POST["fromTable"];
		$username = $_POST["username"];
		$conn = getConnection();
		$sql = "";
		$ID = '';
		$sqlN = '';
		if($_POST["newPassword"] != $_POST["confirmNewPassword"]){
			$arr = array( "returnCode" => "5", "message" => "Passwords must match" );
			echo json_encode($arr);
			exit();
		}

		if($fromTable == 1){
			$sql = 'SELECT S.`SecurityAnswer`, S.`StaffID` AS ID FROM `STAFF` S JOIN `RESIDENCE_DIRECTOR` R ON S.`StaffID` = R.`StaffID` WHERE `Email` = "'.$username.'";';
			$sqlN = 'UPDATE `STAFF_PASSWORD` SET `Password` = "%subs1%" WHERE `StaffID` = "%subs2%"';
		} elseif ($fromTable == 2){
			$sql = 'SELECT S.`SecurityAnswer`, S.`StaffID` AS ID FROM `STAFF` S JOIN `RESIDENCE_ASSISTANT` R ON S.`StaffID` = R.`StaffID` WHERE `Email` = "'.$username.'";';
			$sqlN = 'UPDATE `STAFF_PASSWORD` SET `Password` = "%subs1%" WHERE `StaffID` = "%subs2%"';
		} elseif ($fromTable == 3){
			$sql = 'SELECT P.`SecurityAnswer`, S.`StudentID` AS ID FROM `STUDENT_PASSWORD` P JOIN `STUDENT` S ON S.`StudentID` = P.`StudentID` WHERE `SchoolEMail` = "'.$username.'"';
			$sqlN = 'UPDATE `STUDENT_PASSWORD` SET `Password` = "%subs1%" WHERE `StudentID` = "%subs2%"';
		}		
		$result = $conn->query($sql);
		if ($result) {
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$answer = strtolower($row["SecurityAnswer"]);
				$ID = $row["ID"];
				if($answer == strtolower($_POST["securityAnswer"])){

					$sqlN = str_replace("%subs1%", md5($_POST["newPassword"]), $sqlN);
					$sqlN = str_replace("%subs2%", $ID, $sqlN);

					$result = $conn->query($sqlN);
					if (!$result) {
						$arr = array( "returnCode" => "4", "message" => $conn->error );
						echo json_encode($arr);
						exit();
					} else {
						$arr = array( "returnCode" => "0", "message" => "Password changed succefully");
						echo json_encode($arr);
					}
					
				} else{
					$arr = array( "returnCode" => "2", "message" => "Invalid Answer" );
					echo json_encode($arr);
				}
			} else{
				$arr = array( "returnCode" => "1", "message" => "Security question for user not found" );
				echo json_encode($arr);
			}
		} else {
			$arr = array( "returnCode" => "4", "message" => $conn->error );
			echo json_encode($arr);
		}
	}
?>