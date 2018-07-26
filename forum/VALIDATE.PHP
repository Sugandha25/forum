<?php
session_start();
?>
<?php
$_SESSION["user"]=$_POST["uid"];
?>
<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "df";
$password=$_POST["psw"];
$names=$_POST["uid"];

//echo "entered";
//echo $_SESSION['user'];
$conn = new mysqli("localhost", "root","","df");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query ='select password from signup where id='.'"'.$names.'"';

//echo $query;
$result=$conn->query($query);
$row=$result->fetch_assoc();
$comp=$row["password"];
//echo $comp;

if ($comp ==$password) {
  
header("Location:new.php");
   exit;
   
} 
else
{
	$message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');window.location.assign('register.php');</script>";
}
