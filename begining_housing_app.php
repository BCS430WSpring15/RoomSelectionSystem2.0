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
		  <h2>Making your life easy</h2>
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
			<td>RAM ID#:</td><td><input id="RAM_ID" type="text" class="text" /></td>
          </tr>
          <tr>
			<td>Address:</td><td><input id="address" type="text" class="text" placeholder="Number  Street  APT"/></td>
			<td>Cell Phone:</td><td><input id="cell_phone" type="text" class="text" placeholder="(    )         -"/></td>
          </tr>
     
          <tr>
			<td></td><td><input id="address" type="text" class="text" placeholder="Town State Zipcode"/></td>
			<td>Home Phone:</td><td><input id="home_phone" type="text" class="text"placeholder="(    )         -" /></td>
          </tr>
       
          <tr>
			<td>Date of Birth:</td><td><input id="address" type="text" class="text" placeholder="YYYY-MM-DD"/></td>
			<td>Sex:</td> <td><input type="radio" name="smoker" value="1"> Male
            <input type="radio" name="smoker" value="0"> Female </td>
          </tr>

          <td>E-mail:</td><td><input id="emial" type="text" class="text" /> </td>
          <td>Age:</td><td><input id="age" type="text" class="text"/></td>
        </table>
		</form>
     <div class="p-container">
       
         <input id="houAppBtn" class="submit" type="button" value="SUBMIT" name="name" />     
              <div class="clear"></div>
          </div>
      </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Eagle Solutions | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</body>
</html>
