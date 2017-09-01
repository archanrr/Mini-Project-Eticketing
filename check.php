<?php
/*
$servername="localhost";
$username="id2323773_fastbusonline";
$password="fastbusonline";
$dbname="id2323773_fastbusonline";*/
$servername="localhost";
$username="root";
$password="";
$dbname="id2323773";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  //echo "connection established successfully";
}
$sql="select *from seat";
 $result=mysqli_query($conn,$sql);
$i=0;
while($row=mysqli_fetch_assoc($result))
{
  $data[$i]=$row['flag'];
$i++;
}
$arr=json_encode($data);
echo $arr;
?>