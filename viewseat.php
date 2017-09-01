<html>
<head>
<style>
body
{
  background:url("http://www.kastler.at/uploads/tx_flexslider/RoemersteinBus_Innen3_465x280.JPG");
  background-size:cover;
}
</style>
</head>
<body>
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
	// echo "connection successful<br>";
$flag1=0;
echo $_POST['3']; 
for($i=1;$i<=24;$i++)
 {
   echo $_POST[$i];
	 if(!($_POST[$i]>=900))
	 {
		 $flag1=1;
		 $sql="select *from seat where seatno='$_POST[$i]'";
                  $result=mysqli_query($conn,$sql);
		 $row=mysqli_fetch_assoc($result);
		 if($row['flag']==0)
		 {
			 $sql="update seat set flag='1' where seatno='$_POST[$i]'";
			 $result=mysqli_query($conn,$sql);
                    ?>
                     <script>
                            alert("SEAT BOOKED SUCESSFULLY");

                     </script>
                      
                   <?php
            
		    //echo "seat no".$i."booked<br>";
		 }
		 else
		 {
                                             ?>
                     <script>
                            alert("seat<?php echo $i ?>not available");

                     </script>
                      
                   <?php
			// echo "seat no".$i."not available<br>";
		 }
	 }
 }
if($flag1==0)
{
   //echo "no seat selected";
?><script>
alert("NO SEATS SELECTED");
</script><?php	 
}	
 ?>
 </body>
 </html>