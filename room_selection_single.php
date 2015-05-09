<?php require 'header.php'; require 'dbConn.php';?>
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
       
         <input id="begHouAppBtn" class="submit" type="button" value="SUBMIT" name="name" />     
              <div class="clear"></div>
          </div>
      </div>
<?php require 'footer.php'; ?>