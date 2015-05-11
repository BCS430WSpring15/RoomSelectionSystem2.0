<?php require 'header.php';
  session_start();
  if(!isset($_SESSION["userType"]) && empty($_SESSION["userType"]) && !isset($_SESSION["user"]) && empty($_SESSION["user"])){
    header('Location: login.php');
  }
?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a>Home</a></li>
          <?php
            if($_SESSION["userType"] == "1" || $_SESSION["userType"] == "2"){
              echo '<li><a href="room_assigment.php">Room Assignment</a></li>';
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
    <div id="site_content">
      <div class="sidebar">
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <center><h1>Welcome to the Room Selection System</h1></center>
        <center><h2>Please select one of the options from the menu</2></center>
      </div>
    </div>
<?php require 'footer.php'; ?>