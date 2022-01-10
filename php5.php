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

else {
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$fadid=$_POST['Id'];
		$fpass=$_POST['pswk'];
		// $sq="SELECT * FROM `student1_record` WHERE 'applid' = $applid AND 'password'=$password";
		// $result = mysqli_query($conn,$sq);
		$sql= mysqli_query($conn,"SELECT * FROM admin1_record where adid= $fadid and pass = '$fpass'");
		//echo $res1;
		 //echo $res1;
		 //$rcount=mysqli_num_rows($res1); 
		 if (mysqli_num_rows($sql)>0){
			session_start();
			$_SESSION['Name'] = $fadid;
			 header ("location: php4.php");
		 }
		 else{
			 echo "INVALID CREDENTIALS";
		 }
		# code...
	}
	# code...
}


mysqli_close($conn);



     ?>