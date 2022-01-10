<html>
    <head>
        <style>


ul{
    float: left;
    width: 100%;
    padding:0;
    margin:0;
    list-style-type:none;


}
body{
        background-image:url(https://static.independent.co.uk/2021/11/17/08/newFile-1.jpg?width=640&auto=webp&quality=75);
       background-size:cover;
    }
a.cd{
    float:left;
    width:10em;
    text-decoration:none;
    color:white;
    background-color:rgb(0,0,0,0.4);
    padding: 0.2em 0.6em;
    border-right:1px solid white;
    text-align:center;
    height: 20px;
    
}

h1{
    color:saddlebrown;
    background-color:gainsboro;
    text-align:44px;
    margin:0;
    padding:0;
}



a.cd:hover{ background-color:#ff3300;}
li{display:inline;}
</style>
<style>
    div{
       
        height:auto;

    }
input[type=text],input[type=password]{
    width:30%;
    padding:12px 20px;
    height:10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing:border-box;
    
}
button{

    width:3background-color:#4CAF50;
    color:white;
    padding:14px 20px;
    margin: 8px 0;
    border:none;
   cursor:pointer;
   width:25%;
}




    
    @media screen and(max-width: 300px){
     .cancelbtn,.signbtn{
         width:100%;

     }

    }
    h2{
        color:blue;

    }
    </style>
    </head>
    <body>

    <ul>
    <li><a class="cd" href="INDEX.html">Home</a></li>
  <li><a class="cd" href="INDEX1.html">About us</a></li>
  <li><a class="cd" href="INDEX2.html">Academics</a></li>
  <li><a class="cd" href="INDEX3.html">Fee</a></li>
  <li><a class="cd" href="INDEX4.html">Admissions</a></li>
  <li><a class="cd" href="INDEX5.html" >Career</a></li>
    <li><a class="cd" href="INDEX6.html" >Register</a></li>
    <li><a class="cd" href="INDEX7.html" >Login</a></li>
    <li><a class="cd" href="INDEX8.php" >Admin Login</a></li>
    <li><a class="cd" href="INDEX9.html" >Admin register</a></li>
<li><a class="cd" href="logout.php">Log out</a></li>

</ul>



<style><h1>
{
    color:black;

}
label{
    min-width:100px;
    display:inline-block;

}
</style>
<title>
    Details</title>
    <div id='a'>
        <h2>Entered Details and status </h2>
        <?php
        $server_name="localhost";
        $username="root";
        $password="";
        $database_name="database234";
        $conn=mysqli_connect($server_name,$username,$password,$database_name);
        if(!$conn)
        {
            die("connection failed:" .mysql_connect_error()) ;

        }
    mysqli_select_db($conn,$database_name);
    session_start();
    if(isset($_SESSION['Name'])){
echo "welcome " . $_SESSION['Name']." to your account";   
$_a=$_SESSION['Name']; 
$query="SELECT * FROM admin1_record where adid=$_a";



echo ("<table>");
$first_row=true;




    

    }
?>
<h3>if status is accepted <a href="INDEX.html"> click here</a> to home page</h3>
</div>
</body>
<h/tml>



   