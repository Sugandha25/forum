<?php
//connect.php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'df';
 $connection=mysqli_connect($server, $username,  $password);

if(!$connection)
{
    die("Database connection failed" . mysqli_error($connection));
}
$select_db=mysqli_select_db($connection,$database);
 
if(!$select_db)
{
    die("Database selection failed" . mysqli_error($connection));
}
?>