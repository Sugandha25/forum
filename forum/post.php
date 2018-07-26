
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
  .w3-dropdown-click,.w3-dropdown-hover{position:relative;display:inline-block;cursor:pointer}
.w3-dropdown-hover:hover .w3-dropdown-content{display:block}
.w3-dropdown-hover:first-child,.w3-dropdown-click:hover{background-color:#ccc;color:white}
.w3-dropdown-hover:hover > .w3-button:first-child,.w3-dropdown-click:hover > .w3-button:first-child{background-color:#ccc;color:white}
.w3-dropdown-content{cursor:auto;color:white;background-color:black;display:none;position:absolute;min-width:60px;margin:0;padding-right:10px;z-index:1}
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" background="upload2.png">

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
<body>
<p>"ASK YOUR QUESTIONS!"</p>
<h4 style="font-weight: bold">
<form action="post1.php" method="POST" style="padding-top: 100px;color:black; text-align: center"> 
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?> 
       Subject: <input type="text" name="subject"><br><br>
  University ID: <input type="text" name="Id" value="<?php
        echo $_SESSION["user"];
        ?>" disabled="disabled"><br>
  <br><textarea rows="6" cols="40" name="comment"></textarea><br>
  <input type="submit" style="color:black">
</form>
<br></h4>

<style>
p{
	padding-top:80px;
	color:black;
	font-weight:bold;
	font-size:50px;
	text-align:center;
}
</style>
</body>
</html>

