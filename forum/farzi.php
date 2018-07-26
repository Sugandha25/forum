<?php
// remove all session variables
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>TALKBOX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="frontstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" background="s7.jpg">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">TALKBOX</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#Home">HOME</a></li>
          <li><a href="#About">ABOUT</a></li>
          <li><a href="#ContactUs">CONTACT US</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user glyphicon-log-in""></span> Sign Up/Login</a></li>
      
    </ul>
      </div>
    </div>
  </div>
</nav>    
<?php
        echo $_SESSION["user"];
        ?>
<div id="Home" class="container-fluid">
  <p align="center"><b>TALKBOX</b></p>
  <h2  align="center"><marquee>"A one step solution to every problem!"</marquee></h2>
   <div id="quotedisplay">
  </div>
  <button style="float:right" class="btn btn-primary"onclick="newquote()">New quote</button>
  </div>

<div id="About" class="container-fluid">
  <h1><b>ABOUT</b></h1>
  <p>Talkbox is a platform tool that lets the students and faculties to share and discuss topics. With this tool, members can easily interact about conversations and questions and manage discussions status. Talkbox aims to bring together its members and to establish new collaborations to come to new solutions that ultimately will benefit all. The discussions can be on different kind of topics or questions raised by inquisitive students and faculties.<br>
  The purpose of this Online Forum is to facilitate discussions on strategic approaches to capacity-building of students, as well as measures for improving the planning, implementation, coordination and monitoring. This forum provides an area to easily access the notes. Talkbox aims to bring together its members and to establish new collaborations to come to new solutions that ultimately will benefit all.
</p>
</div>
<div id="ContactUs" class="container-fluid">
  <h1><b>CONTACT US</b></h1>
  <a href="https://www.facebook.com/Talkbox-201986150404276/?view_public_for=2019861150404276" ><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
  <a href="https://www.instagram.com/discussion_forum/"><i class="fa fa-instagram" style="font-size:36px"></i></a>
</div>
</body>
<script src="javascript.js"> </script>
</html>
