<?php

/*
$servername="localhost";
$username="id2323773_fastbusonline";
$password="fastbusonline";
$dbname="id2323773_fastbusonline";
*/
$servername="localhost";
$username="root";
$password="";
$dbname="id2323773";

$a=$_POST["user"];
$b=$_POST["pass"];
$c=$_POST["dob"];
$d=$_POST["userid"];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  //echo "connection established successfully";
}
$sql="SELECT *FROM alogin WHERE  username='$a' and dob='$c' and userid='$d' " ;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row["password"]==$b)
{
  //echo "succesfully entered";
     ?><script>alert("Login Sucessfull");
               location="update.html";
	</script><?php 
}
else
{ 
    ?><script>alert("Wrong Username or password..pls try again");
	 location="authoritylogin.html";
	</script><?php  
  
}
 ?>