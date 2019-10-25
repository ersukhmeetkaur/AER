<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<title>AER Portal-Login, Register and more</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<!-- Validator   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script> 

<!-- universal css -->
<link rel="stylesheet" href="css/universal.css">
<!-- index css -->
<link rel="stylesheet" href="css/index.css">

<!-- index js -->
  <script src="js/index.js"></script>
</head>
<?php
include "request/"."connection.php"; //connect the connection page
   session_start();


if(isset($_SESSION['usertype'])) { // if already login
   header("location: dashboard.php"); // send to user dashboard
   exit; 
}

?>
<body>

<?php include 'section/ajaxloader.php'; ?>
<?php include 'section/navindex.php'; ?>


 <img src="images/logo.png"  style="margin-top:10px;margin-left:150px;width:25%;" alt="Image">
 <br>
 
 
<div id="myDiv1"></div>
<br>
<div class="review col-xs-12 col-sm-10 col-sm-offset-1">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active"> <img src="images/1.jpg"  style="height:528px; width:940px;"> </div>
    <div class="item"> <img src="images/2.jpg"  style="height:528px; width:940px;"> </div>
    <div class="item"> <img src="images/3.jpg"  style="height:528px; width:940px;"> </div>
  </div>
</div>
<div class="container-fluid bg-2 text-left">
  <h3 class="margin text-center">About Vishwakarma Awards</h3>
  <p>All India Council for Technical Education (AICTE), Ministry of Human Resource Development, Govt. of India ,The Indian Society for Technical Education (ISTE) & Engineering Council of India (ECI), the apex Engineering Body of India are jointly holding a competition "AICTE-ECI-ISTE Chhatra Vishwakarma Awards” for the students of AICTE approved Degree & Diploma level technical institutions.</p>
  <br>
  <p>To recognize and honour innovative work of the students displaying exceptional skills in different Engineering streams. Awards will be given in following categories separately for Degree and Diploma Students (including students from AICTE approved Community College): <br>1. Category-I: Outstanding Student Engineers (3 Awards each in Civil, Electrical, Mechanical, Electronics Engineering, Computer Science and Biotechnology streams or their allied branches)(Ref. Annexure-A for allied Branches). <br> 2. Category-II: Outstanding Teachers Awards (3 Awards each in Civil, Electrical, Mechanical, Electronics Engineering, Computer Science and Biotechnology streams or their allied branches). <br>3. Category-III: Outstanding Institutions Awards (3 Awards) based on the maximum number of awards won from the above two categories and other criteria.</p>
</div>

<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Registration Details</h3>
  <br>
  <div class="row col-container">
    <div class="col-sm-4" styleheight: 50px;>
	<div class="team">
      <h4>Important dates</h4>
      <ol align="left">
            <li>Online application will start from:xx-yy-zzzz</li><br>
            <li>Last date to submit the application:xx-yy-zzzz</li><br>
			<li>Last date to submit the application:xx-yy-zzzz</li><br>
            <li>Last date to submit the application:xx-yy-zzzz</li><br>
            <li>Last date to submit the application:xx-yy-zzzz</li><br>
			 </ol>
      </div></div>
    <div class="col-sm-4">
	<div class="mentor">
      <h4>Mentor</h4> 
            <ol align="left">
            <li>Students from following stream or its aligned streams:<br>
Civil/ Electrical/ Mechanical/ Electronics/Computer Engineering/Bio Technology and other aligned streams.</li>
            <li>Students of UG Engineering, Diploma Engineering Programs and Vocational Diploma programme of Community College are eligible to apply.</li>
			<li>Nominations/Applications from girls / women are especially encouraged</li>
            <li>Number of UG/ Diploma projects guided to solve problem of society during the last three years, List of ideas to be included.</li>
            <li>Application for only Practical Demonstrable models (no theoretical knowledge papers) will be entertained.</li>
			 </ol>
      
      
  </div>
</div>
    <div class="col-sm-4">
	<div class="mentor">
      <h4>Mentor</h4>
     
            <ol align="left">
            <li>Mentor/ Teacher-In-charge whose students have been adjudged worthy of receiving the Category-I award shall be eligible for the consideration of award.</li>
            <li>Other criteria shall include achievements of the mentor:
			<ol type="a" align="left">
            <li>Number of UG/ Diploma projects guided on similar area during the last three years.</li>
            <li>Number of UG/ Diploma projects guided to solve problem of society during the last three years.</li>
            <li>Number of research publications during last three years</li>
			  <li>Student Feedback Index</li>
			    
				<li>Number of Awards/Patents (if any)</li>
            </ol>
   
      
  </div>
</div>
</div>
</div>
</div>
<?php include 'section/footer.php'; ?>
</body>
</html>

