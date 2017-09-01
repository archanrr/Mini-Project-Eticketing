<?php
/*$servername="localhost";
$username="id2323773_fastbusonline";
$password="fastbusonline";
$dbname="id2323773_fastbusonline";
*/
$servername="localhost";
$username="root";
$password="";
$dbname="id2323773";

$a=$_POST["bus"];
$b=$_POST["type"];
$c=$_POST["source"];
$d=$_POST["destination"];
$e=$_POST["start"];
$f=$_POST["end"];
$g=$_POST["noofseats"];
$h=$_POST["price"];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  echo "connection established successfully";
  $sql="INSERT INTO busdetails VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h','0')"; 
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    //echo "your application submission is successfull";
	?><script>alert("SUCESSFULLY ADDED...BYE..");
	 location="update.html";
	</script><?php    
  }
else
{
echo "error..";
}
}

  ?>