<?php require 'header.php'; require 'dbConn.php';
  session_start();
  if(!isset($_SESSION["userType"]) && empty($_SESSION["userType"]) && !isset($_SESSION["user"]) && empty($_SESSION["user"])){
    header('Location: login.php');
  } else {
    if($_SESSION["userType"] != "3" && $_SESSION["userType"] != "1"){
      header('Location: home.php');
    }
  }
?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <?php
            if($_SESSION["userType"] == "1"){
              echo '<li><a href="add_room.php">Add Room</a></li>';
            }
            if($_SESSION["userType"] == "1" || $_SESSION["userType"] == "2"){
              echo '<li><a href="room_assigment.php">Room Assignment</a></li>';
            } else if($_SESSION["userType"] == "2"){

            } else if($_SESSION["userType"] == "3"){
              echo '<li><a href="financial_status.php">Financial Status</a></li>';
            }
            if(isset($_SESSION["isNew"]) && !empty($_SESSION["isNew"])){
              if($_SESSION["isNew"] == "false"){
                echo '<li class="selected"><a>Room Selection</a></li>';
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
    <h1>Room Selection</h1>
        <form name="beginingHousingAppForm" action="" id="beginingHousingAppForm">
        <table style="width:100%;">
          <tr>
      			<td>Building</td><td>Floor</td>
      			<td>Type of Suite</td><td>Room</td>
          </tr>
          <tr>

    			<td>
            <select id="buildingSelect">
            <option value='-1'>---SELECT---</option>
            <?php
              $conn = getConnection();
              $sql = 'SELECT * FROM `BUILDING`;';
              $result = $conn->query($sql);
              if ($result) {
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "<option value='".$row["BuildingID"]."'>".$row["Name"]."</option>";
                  }
                }
              }
            ?>
            </select>
          </td>

          <td>
            <select id="floorSelect" disabled="true">
            <option value='-1'>---SELECT---</option>
            </select>
          </td>
    			<td>
            <select id="suiteSelect" disabled="true">
            <option value='-1'>---SELECT---</option>
            </select>
          </td>
          <td>
            <select id="roomSelect" disabled="true">
            <option value='-1'>---SELECT---</option>
            </select>
          </td>
        </tr>
        </table>
		</form>
     <div class="p-container">
       
         <input id="roomSelectSingle" class="submit" type="button" value="SUBMIT" name="name" />     
              <div class="clear"></div>
          </div>
      </div>
      <a id="go_to_home" class="hidden"></a>
      <input id="studentID" type="text" class="hidden" <?php 
      if($_SESSION["userType"] == "1" && isset($_GET["id"]) && !empty($_GET["id"])){
        echo 'value="'.$_GET["id"].'"';
      } else if($_SESSION["userType"] == "3") {
        echo 'value=""';
      } 
    ?> />
<?php require 'footer.php'; ?>