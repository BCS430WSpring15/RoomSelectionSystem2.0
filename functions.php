 <?php
	require 'dbConn.php';
	if (isset($_POST["funct"]) && !empty($_POST["funct"])) {
		if($_POST["funct"] == "VALUSER"){
			validateUserLogin();
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
				$arr = array( "returnCode" => "0" );
				echo json_encode($arr);
			} else {
				$arr = array( "returnCode" => "1" );
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
						$arr = array( "returnCode" => "0" );
						echo json_encode($arr);
					} else {
						$arr = array( "returnCode" => "1" );
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
							$arr = array( "returnCode" => "0" );
							echo json_encode($arr);
						} else {
							$arr = array( "returnCode" => "1" );
							echo json_encode($arr); 
						}
					} else{
					$arr = array( "returnCode" => "2" );
					echo json_encode($arr);
					}
				} 
			}
	}
?>