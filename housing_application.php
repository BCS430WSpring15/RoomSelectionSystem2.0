<?php require 'header.php';
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
              echo '<li><a href="financial_status.php">Financial Status</a></li>';
            }
            if(isset($_SESSION["isNew"]) && !empty($_SESSION["isNew"])){
              if($_SESSION["isNew"] == "false"){
                echo '<li><a href="room_selection_single.php">Room Selection</a></li>';
              } else if($_SESSION["isNew"] == "true"){
                echo '<li class="selected"><a>Housing Application</a></li>';
              }
            }
          ?>
          <li><a href="log_out.php">Log Out</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
    <h1>Housing Application</h1>
        <form name="housingApplicationForm" action="" id="housingApplicationForm">
        <p class="conditionText">Carefully read and complete this application.  Completion of this application does not guarantee a room assignment; the <strong>priority deadline is JUNE 30th.  <span class="underline">MAIL THIS APPLICATION</span></strong> and a check payable to "Farmingdale State" for the <strong>$50.00</strong> Advance Room Deposit to: <strong>Farmingdale State College, Student Accounts Office, Laffin Hall, 2350 Broadhollow Road, Farmingdale, NY 11735.</strong></p>
        <table style="width:100%;">
          <tr>
            <td>Emergency Contact: <span class="required">*</span></td><td><input id="emergcontact" type="text" class="text" placeholder="Last Name, First Name" /></td>
            <td>Emergency Contact Phone: <span class="required">*</span></td><td><input id="emergcontactphone" type="text" class="text" /></td>
          </tr>
        </table>
        <p class="conditionText"><strong class="underline">LIVING OPTIONS:</strong>  Assignments of all rooms are made without regard to race, color, creed, national origin or veteran status.  Indicate any special requests you wish to have considered in your housing assignment in this section of the application.  Not all special requests can be granted.  Assignments are made on a space available basis.</p>
        <table style="width:100%;">
          <tr>
            <td>A.</td>
            <td colspan="2">Do you have a roommate preference? (give name)</td>
            <td colspan="2"><input id="roommatepreference" type="text" class="text" placeholder="Last Name, First Name"/></td>
          </tr>
          <tr><td colspan="5">(All roomate requests should be mutual and applications submitted at approximately the same time)</td></tr>
          <tr>
            <td>B.<span class="required">*</span></td>
            <td colspan="4">I
            <input type="radio" name="smoker" value="1"> smoke 
            <input type="radio" name="smoker" value="0"> do not smoke (smoking is not allowed in any building on this campus)</td>
          </tr>
          <tr>
            <td>C.<span class="required">*</span></td>
            <td>I am an early riser</td>
            <td><input type="radio" name="riser" value="1"> Yes</td>
            <td colspan="2"><input type="radio" name="riser" value="0"> No</td>
          </tr>
          <tr>
            <td>D.<span class="required">*</span></td>
            <td>I like to go to sleep early at night</td>
            <td><input type="radio" name="sleep" value="1"> Yes</td>
            <td colspan="2"><input type="radio" name="sleep" value="0"> No</td>
          </tr>
          <tr>
            <td>E.<span class="required">*</span></td>
            <td>I like to study quietly late at night in my room</td>
            <td><input type="radio" name="quietly" value="1"> Yes</td>
            <td colspan="2"><input type="radio" name="quietly" value="0"> No</td>
          </tr>
          <tr>
            <td>F.<span class="required">*</span></td>
            <td>I consider myself to be a person who is:</td>
            <td><input type="radio" name="consider" value="Untidy"> Untidy</td>
            <td><input type="radio" name="consider" value="Moderately Neat"> Moderately neat</td>
            <td><input type="radio" name="consider" value="Very neat"> Very neat</td>
          </tr>
          <tr>
            <td>G.</td>
            <td colspan="4">Indicate if you have any medical concerns and/or disabilities and any other concerns that require special hosting. A Doctor's note and/or supporting documentation should be attached to this application.</td>
          </tr>
          <tr>
            <td colspan="5"><textarea rows="4" cols="75" id="medicalconcerns"></textarea></td>
          </tr>
        </table>
        <p class="conditionText">I am applying for on-campus housing and understand that if I decide not to attend the College or live in the residence halls, I will notify Residence Life in writing at least 30 days prior to <strong>Resident Student Check in Day</strong>. Until this is done, I will be held responsible for the payment of residence fees. <strong>The $50.00 residence hall deposit fee will be forfeited if this 30 days notice is not given in writing</strong>. <span class="underline">I will read and agree to comply with the "Conditions of Residence Living" and "Residence Life Handbook"</span>. This license is granted for the entire academic year and may be revoked for any violation of it's terms and conditions. I understand that the college is not responsible for the loss of personal property in the residence hall by fire, or other cause. </p>
        <table style="width:100%;">
          <tr>
            <td>Student's signature <span class="required">*</span></td>
            <td colspan="2"><input id="studentsignature" type="text" class="text"  placeholder="Last Name, First Name"/></td>
            <td>Date <span class="required">*</span></td>
            <td><input id="studentsignaturedate" type="text" class="text" placeholder="YYYY-MM-DD" /></td>
          </tr>
          <tr>
            <td colspan="5">* Mark here to permit release of contact information to your respective rommate: <input type="checkbox" id="releaseinfo" name="releaseinfo"></td>
          </tr>
          <tr>
            <td>Parent/guardian's signature</td>
            <td colspan="2"><input id="guardiansignature" type="text" class="text"  placeholder="Last Name, First Name"/></td>
            <td>Date</td>
            <td><input id="guardiansignaturedate" type="text" class="text" placeholder="YYYY-MM-DD"/></td>
          </tr>
          <tr>
            <td colspan="5">(Requiered if student is under 18 years old)</td>
          </tr>
        </table>
          <div class="p-container">
            <input id="houAppBtn" class="submit" type="button" value="SUBMIT" name="name" />     
            <div class="clear"></div>
            <span id="errorHousingApp" class="displayError hidden"></span>
          </div>
        </form>
    </div>
    <a id="go_to_home" href="home.php" class="hidden"></a>
<?php require 'footer.php'; ?>