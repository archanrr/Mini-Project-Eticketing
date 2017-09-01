<?php
session_start();
$x=$_SESSION["usernames"];
?>
<html>
<head>
<style>
.daydet
{
height:50px;
padding: 15px 20px;
font-family: "Times New Roman", Times, serif;
font-size:15px;
font-weight: normal;
color:white;
background-color:green;
text-align:center;
}
ma
{
font-family: "Times New Roman", Times, serif;
font-size:15px;
 font-weight: bold;
text-align:center;
}
#door
{
 width:10%;
 height:8%;
float:left;
}
#stear
{

 width:10%;
 height:8%;
}
.seats
{
   border:5px  solid gray;
    color:green;
   text-align: center;
    width:20%;
    text-decoration: none;
     border-style: solid;
    border-top-color: green;
     border-radius:12px;
    word-wrap: break-word;
    -ms-transform: rotate(270deg); /* IE 9 */
    -webkit-transform: rotate(270deg); /* Safari */
    transform: rotate(270deg); /* Standard syntax */
    background-color:white;
     opacity:0.6;
}
.busdet
{
width:35%;
font-family: "Times New Roman", Times, serif;
font-size:40px;
 font-weight: bold;
text-align:center;
}
.price
{

width:25%;
font-family: "Times New Roman", Times, serif;
font-size:25px;
 font-weight: bold;
text-align:center;
}

#data
{
  height:30%;
  margin-top:40px;
  width:100%;
}
#btn
{

    background-color: green;
    border: none;
    border-radius:12px;
    color: white;
    padding: 15px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
}
#time
{
width:15%;
font-weight:bold;
font-size:20px;
}

#img
{
width:10%;
}

#in
{
width:7%;

}
</style>
<title>book bus....</TITLE>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="searchbus.css">
<link rel="stylesheet" href="addnl.css">
</head>
<body>
<ul>
  <li style="float:right"><img height="10%"  src="http://www.lomas-travel.com.mx/images/transfers/nuevas/bus.png"/></li>
  <li style="float:right"><h1><b>FASTBUS Online<b></h1></li>
  <li><a href="search.html">Home</a></li>
  <li><a href="searchbus.html">Search bus</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="cancel.html">Cancelation</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="feedback.html">Feedback</a></li>
</ul>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

$a=$_POST['from1'];
$b=$_POST['to1'];
$c=$_POST['date1'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
 // echo "connection established successfully";
}
else
  echo "connection failure";
?>

<div class="daydet">
<center><?php echo $a;echo "-->";echo $b;?>&nbsp&nbspOn&nbsp&nbsp<?php echo $c?></center>
</div>

<?php
$sql="select *from busdetails where source='$a' and destination='$b'";
$result=mysqli_query($conn,$sql);
?>
<table border="0" id="data" >
<?php
while($row = mysqli_fetch_assoc($result))
{
 ?>
<tr>
<td id="img"><input height="50px"style="float:right"  type="image" src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Aiga_bus_on_green_circle.svg"/></td>
<td class="busdet"><?php echo $row['bus']?><br><ma><?php echo $row['type']?></ma></td>
 <td id="time"><center><?php echo $row['start'];echo "-->"; echo $row['end'];?></center></td>
<td id="in">&nbsp&nbsp<?php echo $row['ratings']?></td>
<td id="in">&nbsp<?php echo $row['noofseats']?></td>
<td class="price">INR<?php echo $row['price']?>&nbsp&nbsp</td>
<td><button id="btn"> View Seats</button>
</tr>
<?php
}
?>
<script src="seat.js">
</script>
</table>
</body>
</html>