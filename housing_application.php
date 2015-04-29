<!DOCTYPE HTML>
<html>

<head>
  <title>Room Selection System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <script type="text/javascript" src="scripts/app.js" ></script>
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <<h1><a>Room<span class="logo_colour">Selection System</span></a></h1>
          <h2>Simple. Contemporary.</h2>
        </div>
      </div>
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
    <div id="site_content">
        <form name="housingApplicationForm" action="" id="housingApplicationForm">
        <table>
          <tr>
            <td>Emergency Contact:</td><td><input id="emergcontact" type="text" class="text" /></td>
            <td>Emergency Contact Phone:</td><td><input id="emergcontactphone" type="text" class="text" /></td>
          </tr>
        </table>
        <p>Bunch of even more text here.</p>
        <table>
          <tr>
            <td>A.</td>
            <td colspan="2">Do you have a roommate preference? (give name)</td>
            <td colspan="2"><input id="roommatepreference" type="text" class="text" /></td>
          </tr>
          <tr><td colspan="5">(All roomate requests should be mutual and applications submitted at approximately the same time)</td></tr>
          <tr>
            <td>B.</td>
            <td colspan="5">I
            <input type="radio" name="smoker" value="1"> smoke 
            <input type="radio" name="smoker" value="0"> do not smoke (smoking is not allowed in any building on this campus)</td>
          </tr>
          <tr>
            <td>C.</td>
            <td>I am an early riser</td>
            <td><input type="radio" name="riser" value="1"> Yes</td>
            <td><input type="radio" name="riser" value="0"> No</td>
          </tr>
          <tr>
            <td>D.</td>
            <td>I like to go to sleep early at night</td>
            <td><input type="radio" name="sleep" value="1"> Yes</td>
            <td><input type="radio" name="sleep" value="0"> No</td>
          </tr>
          <tr>
            <td>E.</td>
            <td>I like to study quietly late at night in my room</td>
            <td><input type="radio" name="quietly" value="1"> Yes</td>
            <td><input type="radio" name="quietly" value="0"> No</td>
          </tr>
          <tr>
            <td>F.</td>
            <td>I consider myself to be a person who is:</td>
            <td><input type="radio" name="consider" value="Untidy"> Untidy</td>
            <td><input type="radio" name="consider" value="Moderately Neat"> Moderately neat</td>
            <td><input type="radio" name="consider" value="Very neat"> Very neat</td>
          </tr>
          <tr>
            <td>G.</td>
            <td colspan="4">Indicate if you have any mediacal concerns and/or disabilities and any other concerns that require special hosting. A Doctor's note and/or supporting documentation should be attached to this application.</td>
          </tr>
          <tr>
            <td colspan="5"><textarea rows="4" cols="75" id="medicalconcerns"></textarea></td>
          </tr>
        </table>
        <p>Bunch of even more text here.</p>
        <table>
          <tr>
            <td>Student's signature</td>
            <td colspan="2"><input id="studentsignature" type="text" class="text" /></td>
            <td>Date</td>
            <td><input id="studentsignaturedate" type="text" class="text" /></td>
          </tr>
          <tr>
            <td colspan="5">* Mark here to permit release of contact information to your respective rommate: <input type="checkbox" id="releaseinfo" name="releaseinfo" value="true"></td>
          </tr>
          <tr>
            <td>Parent/guardian's signature</td>
            <td colspan="2"><input id="guardiansignature" type="text" class="text" /></td>
            <td>Date</td>
            <td><input id="guardiansignaturedate" type="text" class="text" /></td>
          </tr>
          <tr>
            <td colspan="5">(Requiered if student is under 18 years old)</td>
          </tr>
        </table>
          <div class="p-container">
              <input id="houAppBtn" class="submit" type="button" value="SUBMIT" name="name" />
              <div class="clear"></div>
          </div>
        </form>
      <div class="sidebar">
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Eagle Solutions | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</body>
</html>
