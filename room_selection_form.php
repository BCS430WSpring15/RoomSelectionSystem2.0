<?php require 'header.php';
  session_start();
  if(!isset($_SESSION["userType"]) && empty($_SESSION["userType"]) && !isset($_SESSION["user"]) && empty($_SESSION["user"])){
    header('Location: login.php');
  }
?>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="home.php">Home</a></li>
          <li><a>Housing Application</a></li>
          <li><a href="remove_student.php">Remove Student</a></li>
          <li><a href="financial_status.php">Financial Status</a></li>
          <li class="selected"><a href="room_selection.php">Room Selection</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
        <form name="roomSelectionForm" action="" id="roomSelectionForm">
        <table>
          <tr>
            <td><input type="checkbox" id="isproxyoption" name="isproxyoption">Proxy Option:</td>
            <td colspan="3">Text here</td>            
          </tr>
          <tr>
            <td></td>
            <td colspan="3">Text here</td>
          </tr>
          <tr>
            <td></td><td colspan="3">More text here</td>
          </tr>
          <tr>
            <td></td><td colspan="2">Your signature: <input id="proxysignature" type="text" class="text" /></td>
            <td>Date: <input id="proxysignaturedate" type="text" class="text" placeholder="YYYY-MM-DD"/></td>
          </tr>
        </table>

        <table>
        <tr>
            <tr>
            <td>Room Representative RAM ID#:</td><td><input id="roomrep" type="text" class="text" /></td>
            <td></td>
        </tr>
        <tr>
          </td>
            <td>Section A: Suite/Room preference I:</td><td><input id="preferencei" type="text" class="text" /></td>
            <td>Roomate RAM ID#: <input id="rommatei" type="text" class="text" /></td>
          </tr>
        </table>

        <table>
          <tr>
            <td colspan="3">Section B: Suite configuration, please list your suitemates: </td>
          </tr>
          <tr>
            <td>Suite <input id="suite" type="text" class="text" /></td>
            <td colspan="2">Group Representative RAM ID# <input id="grouprepname" type="text" class="text" /></td>
          </tr>
          <tr>
            <td>Room <input id="room1" type="text" class="text" /></td>
            <td>RAM ID# <input id="name1" type="text" class="text" /></td>
            <td>Signature <input id="signature1" type="text" class="text" /></td>
          </tr>
          <tr>
            <td>Room <input id="room2" type="text" class="text" /></td>
            <td>RAM ID# <input id="name2" type="text" class="text" /></td>
            <td>Signature <input id="signature2" type="text" class="text" /></td>
          </tr>
          <tr>
            <td>Room <input id="room3" type="text" class="text" /></td>
            <td>RAM ID# <input id="name3" type="text" class="text" /></td>
            <td>Signature <input id="signature3" type="text" class="text" /></td>
          </tr>
          <tr>
            <td>Room <input id="room4" type="text" class="text" /></td>
            <td>RAM ID# <input id="name4" type="text" class="text" /></td>
            <td>Signature <input id="signature4" type="text" class="text" /></td>
          </tr>
          <tr>
            <td>Room <input id="room5" type="text" class="text" /></td>
            <td>RAM ID# <input id="name5" type="text" class="text" /></td>
            <td>Signature <input id="signature5" type="text" class="text" /></td>
          </tr>
          <tr>
            <td>Room <input id="room6" type="text" class="text" /></td>
            <td>RAM ID# <input id="name6" type="text" class="text" /></td>
            <td>Signature <input id="signature6" type="text" class="text" /></td>
          </tr>
        </table>
          <div class="p-container">
              <input id="rooSelForBtn" class="submit" type="button" value="SUBMIT" name="name" />
              <div class="clear"></div>
          </div>
        </form>
      <div class="sidebar">
      </div>
    </div>
<?php require 'footer.php'; ?>