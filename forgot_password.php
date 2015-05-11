<?php require 'header.php'; ?>
    </div>
    <!-----start-main---->
        <div class="forgot-pass-form" id="forgot-pass-form">
          <div class="head">
            <img src="images/logo.png" alt=""/>            
          </div>
          <div id="lfi">
        <form name="forgotPassForm" action="" id="forgotPassForm">
          <li>
            <input id="username" type="text" placeholder="School E-mail" >
          </li>
          <div class="p-container">
              <input id="forgotPassBtn" type="button" value="SUBMIT" >
              <div class="clear"></div>
              <span id="errorForgot" class="displayError hidden"></span>
          </div>
        </form>
        </div>
      </div>

      <input id="fromTable" type="text" disabled="true" class="hidden">

      <div class="confirm-forgot-pass-form hidden" id="confirm-forgot-pass-form">
          <div class="head">
            <img src="images/logo.png" alt=""/>
          </div>
          <div id="lfi">
        <form name="confirmForgotPassForm" action="" id="confirmForgotPassForm">
          <li>
            <input id="securityQuestion" type="text" disabled="true">
          </li>
          <li>
            <input id="securityAnswer" type="text" placeholder="Answer Security Question" >
          </li>
          <li>
            <input id="newPassword" type="password" placeholder="New Password" >
          </li>
          <li>
            <input id="confirmNewPassword" type="password" placeholder="Confirm New Password" >
          </li>
          <div class="p-container">
              <input id="confirmForgotPassBtn" type="button" value="SUBMIT" >
              <div class="clear"></div>
              <span id="errorForgotConfirm" class="displayError hidden"></span>
          </div>
        </form>
        </div>
      </div>
      <a id="to_login" href="login.php" class="hidden"></a>
<?php require 'footer.php'; ?>