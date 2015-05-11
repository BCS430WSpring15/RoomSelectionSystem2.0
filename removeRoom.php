<?php require 'dbConn.php';
  session_start();
  if(!isset($_SESSION["userType"]) && empty($_SESSION["userType"]) && !isset($_SESSION["user"]) && empty($_SESSION["user"])){
    header('Location: login.php');
  } else {
    if($_SESSION["userType"] != "1" && $_SESSION["userType"] != "2"){
      header('Location: home.php');
    }
  }

  if($_SESSION["userType"] == "1"){
  	if(isset($_GET["id"]) && !empty($_GET["id"])){
  		$conn = getConnection();
  		$sql = 'DELETE FROM `PERIOD_ROOM_STUDENT` WHERE `StudentID` = "'.$_GET["id"].'" AND `PeriodID` = (SELECT `PeriodID` FROM `PERIOD` WHERE `IsCurrent` = 1);';
  		$result = $conn->query($sql);
  		if(!$result){
  			echo ("$conn->error");
  		} else {
  			header('Location: room_assigment.php');
  		}
  	}
  }
?>