<?php require 'header.php'; ?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a>Home</a></li>
          <li><a href="housing_application.php">Housing Application</a>
          <li><a href="remove_student.php">Remove Student</a></li>
          <li><a href="financial_status.php">Financial Status</a></li>
          <li><a href="room_selection.php">Room Selection</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <center><h1>Welcome to the</h1></center>
       <center><h1><a href="housing_application.php">Housing Application</a></h1></center>
        <center><h1><a href="remove_student.php">Remove Student</a></h1></center>
		<center><h1><a href="financial_status.php">Financial Status</a></h1></center>
		<center><h1><a href="room_selection.php">Room Selection</a></h1></center>
      </div>
    </div>
<?php require 'footer.php'; ?>