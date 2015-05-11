<?php
	session_start();
  if(isset($_SESSION["userType"]) && !empty($_SESSION["userType"]) && isset($_SESSION["user"]) && !empty($_SESSION["user"])){
    header('Location: home.php');
  }
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Room Selection System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <script src="scripts/jquery.min.js"></script>
  <script src="scripts/jquery-ui.js"></script>

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <script type="text/javascript" src="scripts/app.js" ></script>
  <!--webfonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
  <!--//webfonts-->
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <link rel = "stylesheet" href = "index.css" type = "text/css">
  <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a>Room<span class="logo_colour">Selection System</span></a></h1>
          <h2>Making your life easy</h2>
        </div>
      </div>
</div>
    <header><br/>
	  	<p><img src="images/dorm3.png" alt="Dorm building" class = "center"  /></p>
	</header>

  <nav>
		<ul>
     <li id="li_to_login"><a href = "login.php">Login</a></li>
	 <li><a href = "sign_up_app.php">Sign Up Student</a></li>  
	 	</ul>
  </nav>
<aside class="left">
<div class="scroll-down">
<div class="inner">
<div class="entry">
	  <figure><img src="images/dorm1.png"  />
	  
	  </figure>
	  </div>
<div class="entry">
      <figure><img src="images/dorm2.png"  />
      </figure>
	  </div>
<div class="entry">
	  <figure><img src="images/dorm3.png"  />
	  </figure>
	  </div>
   
      <div class="entry">
	  <figure><img src="images/dorm4.png"  />
	  </figure>
	  </div>
	 
	  <div class="entry">
	  <figure><img src="images/dorm5.png"  />
      </figure>
	  </div>
</div>
</div>
</aside>
<aside class="right">

  <h3>Frequently Asked Questions</h3>
  <br /><br/><img src="images/fsc-logo-rgb.png" class = "displayed" width="200" />
  <ul class = "li">
    <h3>Who can live on campus?</h3>
    <li>Any registerered student who is in good standing with the college.</li>
    <li>Preference for spaces will be given to those students who are matriculated and full time</li>
    <br />
    <h3>What are Damage Deposits?</h3>
    <li>Damage Deposits are calculated with your room rate</li>
    <li>Damage deposits totaling $175 include $100 for "Room Damage" and $75 for "Common Area Damage</li>
    <li>These deposits are refundable after check-out provided that the student is not billed for any damages</li>
    </br>
    <h3>What are Resident Assistants?</h3>
    <li>Resident Assistants (RAs) are student leaders that are employed by Residence Life to assist the Resident Directors and help maintain the residence halls.</li>
    <li>Each RA is responsible for an area of their assigned residence hall and are required to hold programs that enrich the campus experience for their residents</li>
 	<li>The RA is there to help all students with any problem that they may have</li>
 	<br />
 	<h3>Office Hours</h3>
  	<li>Monday through Friday</li>
    <li>8:45am - 4:45pm</li>
	<li>Sinclair Hall</li>
	<li>631-420-2010 / 2191</li>
	<li>Email: reslife@farmingdale.edu</li>
	</br><h3>Links</h3>
	<li><a href = "http://www.farmingdale.edu/campus-life/residence-life/">Residence Life Page</a></li>
	<li><a href = "http://www.farmingdale.edu/">Farmingdale Main Site</a></li>
	<li><a href = "http://www.farmingdale.edu/campus-life/residence-life/housing-faq.shtml/">Rest of Frequently Asked Questions</a></li>
  </ul>
</aside>
  
 <div class="p-container"><h3>Welcome To Residence Life!</h3></div>
 <br />
 <img src="images/dorm2.png" alt="Dorm building" class="left" />
  <p class = "letter">Mission: Residence Life seeks to develop an environment that supports the academic success, retention and rights of resident students by providing services that promote personal responsibility and respect for others.
Motto: 3R's – Rights, Responsibility and Respect
Dear Prospective Resident Student,
"Welcome to your new home!"  That's what you'll hear on check-in day next semester.  Living on campus isn't just "living away from home," it's "living at your home-away-from-home."
The Residence Life Staff recognizes that to gain the full college experience, living on campus is a great asset. Residing on campus is fun and educational, and research shows that students who live on campus earn higher GPAs and are more likely to graduate within four years. Living on campus makes the numerous resources on campus, such as the tutoring canter, gym, and library, more accessible to you. It is also easy for residents to become more involved, meet people, and participate in campus activities.
The residence halls are convenient to academic and administrative areas on campus and offer an environment that supports and complements your academic endeavours.  Residence hall living offers you the opportunity to meet other students and forge friendships that can last a lifetime.  It also provides you with the opportunity to learn about other cultures and lifestyles, as well as learn more about yourself.  Students who live in the residence halls can experience significant personal growth as a result of their new found independence.
If you have any questions about living on campus, please don't hesitate to call us.
Thank you for your interest in residing at Farmingdale State College.  We look forward to being part of this wonderful experience..</p>

  
  </br><h3>Residence Hall Eligibility Policy</h3>
  
  <p class = "letter">The following applies to all students living in the College Residence Halls:
In order to reside in the residence halls, an individual must be a registered Farmingdale State College student. Preference for spaces will be given to those students who are full-time and matriculated.
Students must fill out a housing application. This can be found in your Accepted Student Packet.
Students will be notified by Residence Life once an application is received.  Correspondence will follow giving information on status, room assignment, check-in day, and other information that is important for resident students to know.  </p>

   </br><h3>Room and Board Refunds for Military Service</h3>
  <p class = "letter margin-final">
    Students who withdraw from the residence halls to enter military service having the same criteria as defined in "Tuition and Fee Refund Policy for Military Service" prior to the end of the academic term will have their room and board charges prorated according to the week that the student officially withdraws from the residence halls.
With respect to refunds for military service, this policy supersedes the room and board refund policy for normal withdrawals, which pertains to withdrawals from the first through the fourth week of the semester. Also, this policy is directed to adjusting a student's charges for room and board and the resultant refund, and does not apply to any return of federal financial aid resulting from such transactions, to which federal regulations on return of such funds apply.  </p>
</div>

    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Eagle Solutions | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</body>
</html>