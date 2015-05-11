<?php require 'header.php'; require 'dbConn.php';
  session_start();
  if(!isset($_SESSION["userType"]) && empty($_SESSION["userType"]) && !isset($_SESSION["user"]) && empty($_SESSION["user"])){
    header('Location: login.php');
  } else {
    if($_SESSION["userType"] != "1" && $_SESSION["userType"] != "2"){
      header('Location: home.php');
    }
  }
?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
		  <li><a href="home.php">Home</a></li>
      <?php
            if($_SESSION["userType"] == "1" || $_SESSION["userType"] == "2"){
              echo '<li class="selected"><a>Room Assignment</a></li>';
            } else if($_SESSION["userType"] == "2"){

            } else if($_SESSION["userType"] == "3"){
              echo '<li><a href="financial_status.php">Financial Status</a></li>';
            }
            if(isset($_SESSION["isNew"]) && !empty($_SESSION["isNew"])){
              if($_SESSION["isNew"] == "false"){
                echo '<li><a href="room_selection_single.php">Room Selection</a></li>';
              } else if($_SESSION["isNew"] == "true"){
                echo '<li><a href="housing_application.php">Housing Application</a></li>';
              }
            }
          ?>
          <li><a href="log_out.php">Log Out</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
        <h1>Room Assignment</h1>
        <table style="width:100%;">
        <tr class="aligText">
          <th>First Name</th>
          <th>Last Name</th>
          <th>Ram ID</th>
          <th>Cellphone</th>
          <th>School Email</th>
          <th>Building</th>
          <th>Room Number</th>
          <?php
            if($_SESSION["userType"] == "1"){
              echo '<th>Remove Room</th>';
            }
          ?>
        </tr>
        <?php
          $conn = getConnection();
          $sql = 'SELECT S.`StudentID`, S.`FirstName`, S.`LastName`, S.`RamID`, S.`CellPhone`, S.`SchoolEMail`, B.`Name` AS "Building", R.`RoomNumber` FROM `STUDENT` S JOIN `PERIOD_ROOM_STUDENT` P ON S.`StudentID` = P.`StudentID` JOIN `ROOM` R ON P.`RoomID` = R.`RoomID` JOIN `BUILDING` B ON R.`BuildingID` = B.`BuildingID` WHERE P.`PeriodID` = (SELECT `PeriodID` FROM `PERIOD` WHERE `IsCurrent` = 1);';
            $result = $conn->query($sql);
            if(!$result){
              echo ("$conn->error");
            } else {
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo '<tr>
                    <td>'.$row["FirstName"].'</td>
                    <td>'.$row["LastName"].'</td>
                    <td>'.$row["RamID"].'</td>
                    <td>'.$row["CellPhone"].'</td>
                    <td>'.$row["SchoolEMail"].'</td>
                    <td>'.$row["Building"].'</td>
                    <td>'.$row["RoomNumber"].'</td>';
                    if($_SESSION["userType"] == "1"){
                      echo '<td class="aligText"><span class="removeRoom"><a href="removeRoom.php?id='.$row["StudentID"].'"><img src="images/removeRoom.png" alt="Remove"/> Remove</a></span></td>';
                    }
                  echo '</tr>';
                }
              }
            }
        ?>
        </table>
</div>
<?php require 'footer.php'; ?>