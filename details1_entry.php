<?php

$server_name="localhost";
$username="root";
$password="";
$database_name="database234";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
   die("Connection Failed:"  . mysql_connect_error());

}

if(isset($_POST['save']))
{
   $fname=$_POST['fname'];
$lname=$_POST ['lname'];
$email=$_POST ['email'];
$pass=$_POST['pass'];
   $adid=$_POST['adid'];
   $num=$_POST['num'];
   $DOB=$_POST['DOB'];
   $gender=$_POST['gender'];

//if(strcasecmp($password === $repassword))
//{



}
$sql_query="INSERT INTO admin1_record (fname,lname,email,pass,adid,num,DOB,gender)
VALUES('$fname','$lname','$email','$pass','$adid','$num','$DOB','$gender')";

if(mysqli_query($conn,$sql_query))
{
   echo " New Details Entry inserted successfully !";

}
else 
{
    echo  "Error: " .  $sql  . " "  . mysqli_error($conn);
 }
   mysqli_close($conn);

?>
 <div class="login-page__link"><a href=INDEX8.html>Click Here to login</a><div>



