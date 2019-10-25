<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AER Portal-Login, Register and more</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
   header("location: dashboard.php"); // send to home page
   exit; 
}

?>
<body>

<?php include 'section/ajaxloader.php'; ?>
<?php include 'section/navindex1.php'; ?>

<div class="container" style="margin-top:10px; margin-left:10%;">
  <div class="row">
    <div class="hidden-xs col-sm-3"><img src="images/m.png" style="height:80px;" alt="Image"></div>
    <div class="col-xs-12 col-sm-6"><img src="images/logo.png" class="img-responsive" alt="Image"></div>
    <div class="col-sm-3 hidden-xs"><img src="images/n.png" style="height:80px;" alt="Image"></div>
  </div>
</div>

 <br>
 
 
<div id="myDiv1"></div>
<br>
<div class="review col-xs-12 col-sm-10 col-sm-offset-1">

<div class="top">
<div class="row">
<div class="col-sm-5">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/1.jpg" alt="img0" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/2.jpg" alt="img" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/3.jpg" alt="img1" style="width:100%;">
      </div>
    </div>

  
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

<div class="col-sm-7 col-xs-12 text">


  <h1 class="margin text-center" style="color:blue;"><b>About Vishwakarma Awards</b></h1>
  <br>
  <h3>All India Council for Technical Education (AICTE), Ministry of Human Resource Development, Govt. of India, Engineering Council of India (ECI), and the Indian Society for Technical Education (ISTE), are jointly holding a competition “AICTE-ECI-ISTE Chhatra Vishwakarma Awards-2018” for the students of AICTE approved Degree & Diploma level Technical institutions.</h3>
  <br>
  <h3>The Awards are aimed for motivating young individuals, inspiring leaders and institutions/ organizations to raise their performance in their specific domains leading to significant contribution towards the growth and development of the nation.</h3>
  <br>
</div>
</div>
</div>
<hr>
<div class="row">
    <div class="col-sm-5 col-xs-12">
      <div class="panel panel-info text-center">
        <div class="panel-heading">
          <h1><i class="fa fa-calendar" aria-hidden="true"></i> Important Dates</h1>
        </div>
        <div class="panel-body">
        <ul class="list-group">
        <li class="list-group-item">Online application will start from: <span class="badge">10-07-2018</span></li>
        <li class="list-group-item">Last date to submit the application has been extended <span class="badge">20-08-2018</span></li>
      </ul> 
        </div>
</div>
<div class="panel panel-info text-center">
        <div class="panel-heading">
          <h1><i class="fa fa-download" aria-hidden="true"></i> Downloads</h1>
        </div>
      <div class="panel-body">
      <ul class="list-group">
        <li class="list-group-item"><a href="downloads/Guidelines-Chattra-Vishwakarma_2018.pdf" target="_blank">Guidelines</a><span class="badge">10-07-2018</span></li>
        <li class="list-group-item"><a href="downloads/Vishwa_ECI_2017.pdf" target="_blank">List of Winners for  Chhatra Vishwakarma Awards 2017</a><span class="badge">10-07-2018</span></li>
      </ul> 
        </div>
      </div> 
</div>
<div class="col-sm-7 col-xs-12">
  <p>To recognize and honour innovative work of the students displaying exceptional skills by providing the innovative solution on the given theme. 
 <br>
 Applications will be short listed based on their conformity to the guidelines and information furnished by nominees for specific categories. The recipients will be finalised based on the Recommendation and NOC forwarded by the institute and scrutiny of the applications by the jury & practical demonstrations by the contestants. 
 <br> 
 Awards will be given in following Categories for Degree and Diploma Students (including students from AICTE approved Community College):
 </p>
 <p class="text-center"><strong class="text-info">Category-I:</strong> Outstanding Innovative Team Award (Degree and Diploma)
 <br><strong class="text-info"> Category-II:</strong> Outstanding Teacher Award for mentoring Students Project</p>
 <h3><strong class="text-info"> The Problem:</strong> The participants need to provide and innovative solution to following problem:</h3>
 <h2 class="text-center text-danger">“Empowerment of Villages through Technologies”</h2>
 <p>For the holistic development of villages under the above theme, the following <b class="text-danger">8 sub-themes</b> have been shortlisted: -
<ol>
<li>Water & Irrigation</li>
<li>Sanitation & Solid Liquid Waste Management</li>
<li>Rural Infrastructure</li>
<li>Tourism</li>
<li>Agriculture & Food</li>
<li>Education, Skill Initiative & Startups</li>
<li>Rural Craft & Livelihood</li>
<li>Any other Rural Appropriate Technologies</li>
 </ol>
</p>
<h1 class="text-info text-center"><u>Who Can Apply?</u></h1>
  <p>The Awards cover the students of AICTE approved Degree and Diploma Technical Institutions and Polytechnics. It also includes students from AICTE approved Community Colleges.</p>
  <p><b><i>Nominations/Applications from all girls teams are especially encouraged….!</i></b></p>
</div>
</div>
</div>

<?php include 'section/footer.php'; ?>

</body>
</html>

