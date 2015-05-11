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
      <div id="content">
        <!-- insert the page content here -->
        <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
        <div id="wowslider-container1">
        <div class="ws_images"><ul>
          <li><img src="data1/images/1.jpg" alt="" title="" id="wows1_0"/></li>
          <li><img src="data1/images/2.jpg" alt="" title="" id="wows1_1"/></li>
          <li><img src="data1/images/3.jpg" alt="" title="" id="wows1_2"/></li>
          <li><img src="data1/images/4.jpg" alt="content slider" title="" id="wows1_3"/></li>
          <li><img src="data1/images/5.jpg" alt="" title="" id="wows1_4"/></li>
        </ul></div>
        <div class="ws_shadow"></div>
        </div>  
        <script type="text/javascript" src="engine1/wowslider.js"></script>
        <script type="text/javascript" src="engine1/script.js"></script>
        <!-- End WOWSlider.com BODY section -->
      </div>
    </div>
<?php require 'footer.php'; ?>