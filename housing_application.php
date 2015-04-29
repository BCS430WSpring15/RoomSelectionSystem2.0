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
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <li class="selected"><a>Housing Application</a></li>
          <li><a href="page.html">A Page</a></li>
          <li><a href="another_page.html">Another Page</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
        <h1>Student Housing Application</h1>
        <p>Bunch of text here.</p>
        <p>Bunch of more text here.</p>
        <p>Bunch of even more text here.</p>
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
      <div id="content">
        <!-- insert the page content here -->
        

        

        <h2>Headings</h2>
        <p>These are the different heading formats:</p>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
        <h2>Text</h2>
        <p>The following examples show how the text (within '&lt;p&gt;&lt;/p&gt;' tags) will appear:</p>
        <p><strong>This is an example of bold text</strong></p>
        <p><i>This is an example of italic text</i></p>
        <p><a href="#">This is a hyperlink</a></p>
        <h2>Lists</h2>
        <p>This is an unordered list:</p>
        <ul>
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
        </ul>
        <p>This is an ordered list:</p>
        <ol>
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
        </ol>
        <h2>Images</h2>
        <p>images can be placed on the left, in the center or on the right:</p>
        <span class="left"><img src="style/graphic.png" alt="example graphic" /></span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum.
        </p>
        <span class="center"><img src="style/graphic.png" alt="example graphic" /></span>
        <span class="right"><img src="style/graphic.png" alt="example graphic" /></span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </p>
        <h2>Tables</h2>
        <p>Tables should be used to display data and not used for laying out your website:</p>
        <table style="width:100%; border-spacing:0;">
          <tr><th>Item</th><th>Description</th></tr>
          <tr><td>Item 1</td><td>Description of Item 1</td></tr>
          <tr><td>Item 2</td><td>Description of Item 2</td></tr>
          <tr><td>Item 3</td><td>Description of Item 3</td></tr>
          <tr><td>Item 4</td><td>Description of Item 4</td></tr>
        </table>
        <h2>Form Elements</h2>
        <form action="#" method="post">
          <div class="form_settings">
            <p><span>Form field example</span><input type="text" name="name" value="" /></p>
            <p><span>Textarea example</span><textarea rows="8" cols="50" name="name"></textarea></p>
            <p><span>Checkbox example</span><input class="checkbox" type="checkbox" name="name" value="" /></p>
            <p><span>Dropdown list example</span><select id="id" name="name"><option value="1">Example 1</option><option value="2">Example 2</option></select></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="button" /></p>
          </div>
        </form>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Eagle Solutions | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</body>
</html>
