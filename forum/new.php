<?php
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

  <style>

.grid-container {
  display: grid;
  grid-template-columns: 200px 200px 200px;
  padding: 10px;
  margin: 50px 10px;
 
}
.button {
  display: grid;
  border-radius: 10px;
  background-color: #0F223F;
  color: white;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 200px;
  height: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
  
  }

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.w3-dropdown-click,.w3-dropdown-hover{position:relative;display:inline-block;cursor:pointer}
.w3-dropdown-hover:hover .w3-dropdown-content{display:block}
.w3-dropdown-hover:first-child,.w3-dropdown-click:hover{background-color:#ccc;color:white}
.w3-dropdown-hover:hover > .w3-button:first-child,.w3-dropdown-click:hover > .w3-button:first-child{background-color:#ccc;color:white}
.w3-dropdown-content{cursor:auto;color:white;background-color:black;display:none;position:absolute;min-width:60px;margin:0;padding-right:10px;z-index:1}
</style>
  
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" background="cs.jpg">

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
          <li><a href="farzi.php#Home">HOME</a></li>
          <li><a href="farzi.php#About">ABOUT</a></li>
          <li><a href="farzi.php#ContactUs">CONTACT US</a></li>
        </ul>
        <div class="w3-container">
         <ul class="nav navbar-nav navbar-right" style="font-size: 16px ;color:white; padding-right:30px;padding-top: 12px" >
          <div class="w3-dropdown-hover">
      <li><button style="background-color: black">
        <?php
        echo $_SESSION["user"];
        ?></button>
        <div class="w3-dropdown-content w3-bar-block w3-border" style="color:white">
          <a href="logout.php" class="w3-bar-item w3-button" style="font-size:20px; color:white;">Logout</a>
          </div>

      </li>
      </div>
    </ul></div>
      </div>
    </div>
  </div>
</nav>   
<h2 class="container-fluid">Select your branch</h2>
<div class="grid-container">
<button class="button" data-toggle="dropdown" ><span>Computer Science/Information Technology </span></button>
 <ul class="dropdown-menu">
      <li><a href="uploadfinal.php">1st Year</a></li>
      <li><a href="uploadfinal.php">2nd Year</a></li>
      <li><a href="uploadfinal.php">3rd Year</a></li>
      <li><a href="uploadfinal.php">4th Year</a></li>
    </ul> 
<button class="button" data-toggle="dropdown" style="background-color: #203350"><span>Mechanical Engineering </span></button> 
<ul class="dropdown-menu" style="background-color:#203350 ">
      <li><a href="uploadfinal.php">1st Year</a></li>
      <li><a href="uploadfinal.php">2nd Year</a></li>
      <li><a href="uploadfinal.php">3rd Year</a></li>
      <li><a href="uploadfinal.php">4th Year</a></li>
    </ul> 
<button class="button" data-toggle="dropdown"><span>Civil Engineering </span></button>
<ul class="dropdown-menu">
      <li><a href="uploadfinal.php">1st Year</a></li>
      <li><a href="uploadfinal.php">2nd Year</a></li>
      <li><a href="uploadfinal.php">3rd Year</a></li>
      <li><a href="uploadfinal.php">4th Year</a></li>
    </ul> 
<button class="button" data-toggle="dropdown" style="background-color: #203350"><span>Electrical Engineering </span></button> 
<ul class="dropdown-menu">
      <li><a href="uploadfinal.php">1st Year</a></li>
      <li><a href="uploadfinal.php">2nd Year</a></li>
      <li><a href="uploadfinal.php">3rd Year</a></li>
      <li><a href="uploadfinal.php">4th Year</a></li>
    </ul> 
<button class="button" data-toggle="dropdown"><span>Petroleum Engineering </span></button> 
<ul class="dropdown-menu">
      <li><a href="uploadfinal.php">1st Year</a></li>
      <li><a href="uploadfinal.php">2nd Year</a></li>
      <li><a href="uploadfinal.php">3rd Year</a></li>
      <li><a href="uploadfinal.php">4th Year</a></li>
    </ul>  
<button class="button" data-toggle="dropdown" style="background-color: #203350"><span>Electronics and Communication Engineering </span></button> 
<ul class="dropdown-menu">
      <li><a href="uploadfinal.php">1st Year</a></li>
      <li><a href="uploadfinal.php">2nd Year</a></li>
      <li><a href="uploadfinal.php">3rd Year</a></li>
      <li><a href="uploadfinal.php">4th Year</a></li>
    </ul> 
</div>

</body></html>







