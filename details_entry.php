
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="student45";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
   die("Connection Failed:"  . mysql_connect_error());

}

if(isset($_POST['save']))
{
   $sname=$_POST['sname'];
$fname=$_POST ['fname'];
$mname=$_POST ['mname'];
$DOB=$_POST['DOB'];
   $gender=$_POST['gender'];
   $address=$_POST['address'];
   $applid=$_POST['applid'];
   $password=$_POST['password'];

//if(strcasecmp($password === $repassword))
//{


$course=$_POST ['course'];
   $marks1=$_POST['marks1'];
   $marks2=$_POST['marks2'];
   $jee=$_POST['jee'];
}
$sql_query="INSERT INTO student1_record (sname,fname,mname,DOB,gender,address,applid,password,course,marks1,marks2,jee)
VALUES('$sname','$fname','$mname','$DOB','$gender','$address','$applid','$password','$course','$marks1','$marks2','$jee')";

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
 <div class="login-page__link"><a href=INDEX7.html>Click Here to login</a><div>






 