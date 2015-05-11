<?php require 'header.php'; require 'dbConn.php';
  session_start();
  if(!isset($_SESSION["userType"]) && empty($_SESSION["userType"]) && !isset($_SESSION["user"]) && empty($_SESSION["user"])){
    header('Location: login.php');
  } else {
    if($_SESSION["userType"] != "3"){
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
              echo '<li><a href="room_assigment.php">Room Assignment</a></li>';
            } else if($_SESSION["userType"] == "2"){

            } else if($_SESSION["userType"] == "3"){
              echo '<li class="selected"><a>Financial Status</a></li>';
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
        <h1>Financial Status</h1>
        <table style="width:100%;">
          <tr><td>RAM ID#:</td><td><input id="student" type="text" class="text" disabled="true" <?php echo 'value="'.$_SESSION["user"]["RamID"].'"'; ?> /></td></tr>
          <tr><td>Name:</td><td><input id="reason" type="text" class="text" disabled="true" <?php echo 'value="'.$_SESSION["user"]["LastName"].", ".$_SESSION["user"]["FirstName"].'"'; ?> /></td></tr>
		   <tr><td colspan="2"><textarea rows="4" cols="75" id="medicalconcerns" disabled="true">There are no bills due on your account</textarea></td></tr>
        </table>
    <div class="sidebar"></div>
    </div>		
<?php require 'footer.php'; ?>