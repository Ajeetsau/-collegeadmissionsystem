
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

else {
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$fapplid=$_POST['aid'];
		$fpassword=$_POST['psw'];
		// $sq="SELECT * FROM `student1_record` WHERE 'applid' = $applid AND 'password'=$password";
		// $result = mysqli_query($conn,$sq);
		$sql= mysqli_query($conn,"SELECT * FROM student1_record where applid = $fapplid and password = '$fpassword'");
		//echo $res1;
		 //echo $res1;
		 //$rcount=mysqli_num_rows($res1); 
		 if (mysqli_num_rows($sql)>0){
			session_start();
			$_SESSION['Name'] = $fapplid;
			 header ("location: php3.php");
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