<?php
session_start();
/*
$servername="localhost";
$username="id2323773_fastbusonline";
$password="fastbusonline";
$dbname="id2323773_fastbusonline";*/
$servername="localhost";
$username="root";
$password="";
$dbname="id2323773";

$a=$_POST["user"];
$b=$_POST["ticketno"];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  echo "connection established successfully";
}
$a=$_SESSION["usernames"];
echo $a;
$sql="SELECT * FROM $a";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row)
{
echo $sq;
$result1=mysqli_query($conn,$sq);
if($result1)
{
?>
<script>
alert("SUCESSFULY DELETED");
//location="cancel.html";
</script>
<?php
}
}
else
{
?>
<script>
alert("RECORD NOT FOUND");
location="cancel.html";
</script>
<?php
}
 ?>