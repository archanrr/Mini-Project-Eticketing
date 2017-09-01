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

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  //echo "connection established successfully";
}
$b=$_GET['q'];
$sql="select * from busdetails where bus='KPN'";
 $result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$arr=json_encode($row);
echo $arr;
?>