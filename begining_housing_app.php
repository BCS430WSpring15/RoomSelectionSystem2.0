<?php require 'header.php'; ?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <li class="selected"><a>Housing Application</a></li>
          <li><a href="remove_student.php">Remove Student</a></li>
          <li><a href="financial_status.php">Financial Status</a></li>
          <li><a href="room_selection.php">Room Selection</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
        <form name="beginingHousingAppForm" action="" id="beginingHousingAppForm">
        <table>
          <tr>
			<td>Major:</td><td><input id="major" type="text" class="text" /></td>
			<td>Class Status:</td><td><input id="class_status" type="text" class="text" /></td>
          </tr>
          <tr>
			<td>Name:</td><td><input id="name" type="text" class="text" placeholder="Last Name, First Name" /></td>
			<td>RAM ID#: R</td><td><input id="RAM_ID" type="text" class="text" /></td>
          </tr>
		  
          <tr>
			<td>Address:</td><td><input id="address_street" type="text" class="text" placeholder="Number  Street  APT"/></td>
			<td>Cell Phone:</td><td><input id="cell_phone" type="text" class="text"/></td>
          </tr>
     
          <tr>
			<td></td><td><input id="address_state" type="text" class="text" placeholder="Town State Zipcode"/></td>
			<td>Home Phone:</td><td><input id="home_phone" type="text" class="text"/></td>
          </tr>
       
          <tr>
			<td>Date of Birth:</td><td><input id="birthdate" type="text" class="text" placeholder="YYYY-MM-DD"/></td>
			<td>Gender:</td> <td><input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female </td>
          </tr>

          <td>E-mail:</td><td><input id="email" type="text" class="text" />@farmingdale.edu</td>
          <td>Age:</td><td><input id="age" type="text" class="text"/></td>
		  </tr>
		  
		  <tr>
		  <td>Password:</td><td><input id="password" type="password" class="text"/> </td>
		  <td>Confirm Password:</td><td> <input id="confirmPass" type="password" class="text"/> </td>
		  </tr>
		  
        </table>
		</form>
     <div class="p-container">
       
         <input id="begHouAppBtn" class="submit" type="button" value="SUBMIT" name="name" />     
              <div class="clear"></div>
          </div>
      </div>
<?php require 'footer.php'; ?>