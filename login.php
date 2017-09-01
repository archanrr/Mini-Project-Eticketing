<?php
session_start();
$_SESSION["usernames"]=$_POST["user"];
$x=$_POST["user"];
?>
<html>
<input type="hidden" id="session1" value="<?php echo $x; ?>"/>
<?php
/*$servername="localhost";
$username="id2323773_fastbusonline";
$password="fastbusonline";
$dbname="id2323773_fastbusonline";*/

$servername="localhost";
$username="root";
$password="";
$dbname="id2323773";
$a=$_POST["user"];
$b=$_POST["pass"];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  //echo "connection established successfully";
}
$sql="SELECT *FROM login WHERE  username='$a' " ;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row["password"]==$b)
{
     ?><script>
       var y = document.getElementById("session1").value.toUpperCase();
       alert("Login Sucessfull......Welcome Mr."+y);
       location="searchbus.html";
	</script><?php 
}
else
{ 
    ?><script>alert("Wrong Username or password..pls try again");
	 location="login.html";
	</script><?php  
  
}
 ?> 
</html>