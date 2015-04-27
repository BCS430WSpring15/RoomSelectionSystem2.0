<!DOCTYPE HTML>
<html>

<head>
  <title>Room Selection System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   
  <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Room<span class="logo_colour">Selection System</span></a></h1>
          <h2>Simple. Contemporary.</h2>
        </div>
      </div>
    </div>
    
    <!-----start-main---->
        <div class="login-form">
          <div class="head">
            <img src="images/mem2.jpg" alt=""/>
            
          </div>
        <form action="welcome.php" method="post">
          <li>
            <input type="text" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" ><a href="#" class=" icon user"></a>
          </li>
          <li>
            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
          </li>
          <div class="p-container">
              <input id="loginBtn" type="submit" onclick="myFunction()" value="SIGN IN" >
            <div class="clear"> </div>
          </div>
        </form>
      </div>

    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Eagle Solutions | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</body>
</html>