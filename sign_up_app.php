<?php require 'header.php'; require 'dbConn.php';
  session_start();
  if(isset($_SESSION["userType"]) && !empty($_SESSION["userType"]) && isset($_SESSION["user"]) && !empty($_SESSION["user"])){
    header('Location: home.php');
  }
?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a>Sign Up</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
    <h1>Sign Up Students</h1>
        <form name="beginingHousingAppForm" action="" id="beginingHousingAppForm">
        <table style="width:100%;">
          <tr>
			<td>Major:</td><td><input id="major" type="text" class="text" /></td>
			<td>Class Status:</td><td>
        <select id="class_status">
            <option value='-1'>---SELECT---</option>
            <option value='Freshman'>Freshman</option>
            <option value='Sophomore'>Sophomore</option>
            <option value='Junior'>Junior</option>
            <option value='Senior'>Senior</option>
        </select>
      </td>
          </tr>
          <tr>
			<td>Name: <span class="required">*</span></td><td><input id="name" type="text" class="text" placeholder="Last Name, First Name" /></td>
			<td>RAM ID#: R <span class="required">*</span></td><td><input id="RAM_ID" type="text" class="text" /></td>
          </tr>
		  
          <tr>
			<td>Address: <span class="required">*</span></td><td><input id="address_street" type="text" class="text" placeholder="Number  Street  APT"/></td>
			<td>Cell Phone: <span class="required">*</span></td><td><input id="cell_phone" type="text" class="text"/></td>
          </tr>
     
          <tr>
			<td></td><td><input id="address_state" type="text" class="text" placeholder="Town State Zipcode"/></td>
			<td>Home Phone:</td><td><input id="home_phone" type="text" class="text"/></td>
          </tr>
       
          <tr>
			<td>Date of Birth: <span class="required">*</span></td><td><input id="birthdate" type="text" class="text" placeholder="YYYY-MM-DD"/></td>
			<td>Gender: <span class="required">*</span></td> <td><input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female </td>
          </tr>

          <td>E-mail: <span class="required">*</span></td><td><input id="email" type="text" class="text" />@farmingdale.edu</td>
          <td>Personal Email:</td><td><input id="personalEmail" type="text" class="text"/></td>
		  </tr>

      <tr>
      <td>Security Question: <span class="required">*</span></td><td>
        <select id="secQuest">
          <option value='-1'>---SELECT---</option>
          <?php
              $conn = getConnection();
              $sql = 'SELECT * FROM `SECURITY_QUESTION`;';
              $result = $conn->query($sql);
              if ($result) {
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "<option value='".$row["SecurityQuestionID"]."'>".$row["Question"]."</option>";
                  }
                }
              }
            ?>
        </select>
      </td>
      <td>Answer: <span class="required">*</span></td><td> <input id="secQueAns" class="text"/> </td>
      </tr>
		  
		  <tr>
		  <td>Password: <span class="required">*</span></td><td><input id="password" type="password" class="text"/> </td>
		  <td>Confirm Password: <span class="required">*</span></td><td> <input id="confirmPass" type="password" class="text"/> </td>
		  </tr>
		  
        </table>
        <div class="p-container">
       
         <input id="begHouAppBtn" class="submit" type="button" value="SUBMIT" name="name" />     
              <div class="clear"></div>
              <span id="errorSignUp" class="displayError hidden"></span>
          </div>
		</form>

      </div>
      <a id="go_to_login" href="login.php" class="hidden"></a>
<?php require 'footer.php'; ?>