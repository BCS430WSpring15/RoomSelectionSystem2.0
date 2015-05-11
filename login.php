<?php require 'header.php';
  session_start();
  if(isset($_SESSION["userType"]) && !empty($_SESSION["userType"]) && isset($_SESSION["user"]) && !empty($_SESSION["user"])){
    header('Location: home.php');
  }
?>
    </div>
    <!-----start-main---->
        <div class="login-form">
          <div class="head">
            <img src="images/logo.png" alt=""/>
            
          </div>
          <div id="lfi">
        <form name="loginForm" action="" id="loginForm">
          <li>
            <input id="username" type="text" placeholder="School E-mail" >
          </li>
          <li>
            <input id="password" type="password" placeholder="Password">
          </li>
          <div class="p-container">
              <input id="loginBtn" type="button" value="SIGN IN" >
              <div class="clear"></div> 
              <span id="forgotPassLnk"><a href="forgot_password.php">Forgot Password</a></span>
              <br/>
              <span id="errorLogin" class="displayError hidden"></span>
          </div>
        </form>
        </div>
      </div>
      <a id="to_room_selection" href="home.php" class="hidden"></a>
      <a id="to_housing_app" href="housing_application.php" class="hidden"></a>
<?php require 'footer.php'; ?>