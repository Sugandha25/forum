
<?php
    require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Id = $_POST['id'];
        $Password = $_POST['password'];
        $Type = $_POST['dit'];
        $Branch = $_POST['branch'];
        $Year = $_POST['year'];
         $Email = $_POST['email'];
 
        $query = "INSERT INTO signup (Name,Id,Password,Type,Branch,Year,Email) VALUES ('$Name','$Id','$Password','$Type','$Branch','$Year','$Email')";
        $result = mysqli_query($connection,$query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
<html>
<head>
<title>Discussion Forum</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="loginstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      
      position: relative; 
      background-repeat: no-repeat;
      background-attachment: fixed;
    background-size: 60%;
    font-weight: bold;
    background-position: 60% 50%;

  }
  #Home {padding-top:100px;height:500px;color: white; }
  #About {padding-top:100px;height:500px;color: white; }
  #ContactUs {padding-top:350px;height:500px;color: white ;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" background="s2.jpg">
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
          <li><a href="farzi.php#Home">Home</a></li>
          <li><a href="farzi.php#About">About</a></li>
          <li><a href="farzi.php#ContactUs">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
    </ul>
      </div>
    </div>
  </div>
</nav>  
<script>
function validateform() {
    var x = document.forms["myform"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        //return false;
    }
    var y = document.forms["myform"]["password"].value;
    if (y == "") {
        alert("Password must be filled out");
        //return false;
    }
    var z = document.forms["myform"]["dit"].value;
    if (z == "") {
        alert(" Please enter whether Student or Faculty");
        //return false;
    }
    var a = document.forms["myform"]["email"].value;
    if (a == "") {
        alert("Email must be filled out");
        //return false;
    }
    
}
</script> 
<h1 align="center" style="padding: 30px">Sign Up!It's free!!</h1>
<h4 align="center" font-family="arial-round">
<form name="myform" action="register.php" onsubmit="return validateform()" method="POST"> 
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<b>Name:</b>
<input type="text" name="name" ><br><br>
<b>University ID:</b>
<input type="text" name="id"><br><br>
<b>Password:</b>
<input type="password" name="password"><br><br>
<b>Select one:</b>
<input type="radio" name="dit" value="Student">Student
<input type="radio" name="dit" value="Faculty">Faculty<br><br>
<b>Branch:</b>
<select name="branch">
  <option value="Cse" name="branch">CSE</option>
  <option value="IT" name="branch">IT</option>
  <option value="ME" name="branch">ME</option>
  <option value="ECE" name="branch">ECE</option>
  <option value="EE" name="branch">EE</option>
<option value="CE" name="branch">CE</option>
<option value="PE" name="branch">PE</option>
</select><br><br>
<b>Year:</b>
<select name="year">
  <option value="1st" name="year">I</option>
  <option value="2nd" name="year">II</option>
  <option value="3rd" name="year">III</option>
  <option value="4th" name="year">IV</option>
</select><br><br>
<b>Email ID:</b>
<input type="text" name="email"><br><br>
<?php include 'index1.php';?>
<input type="submit" name="submit">
<input type="reset" name="reset">
</form>

</h4>





<h4 align="center"><b>Already a user?</b>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login Here</button></h4>
<div id="id01" class="modal">
  <h3 align="center">
  <form class="modal-content animate" action="VALIDATE.PHP" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>University Id</b></label>
      <input type="text" name="uid" required>
       <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" name="psw" required>
      <br>
        
      <button type="submit" value="login">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      </div>
      <?php if(isset($found))
{
echo '<p class="w3-center w3-text-red">Invalid user id or password<br>Please try again</p>';
}
?>


    <div class="container" style="background-color:#f1f1f1">
    </div>
  </form>
  </h3>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>