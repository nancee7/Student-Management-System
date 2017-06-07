<!doctype html>
<html>

<head>
	
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">


</head>


<body>
	
<?php

 $servername="localhost";
 $username="nancy";
 $password="ipole";
 $dbname="sms";
 $tbl_name="exeat_and_pass";

 $conn = mysqli_connect("$servername", "$username", "$password","$dbname") or die ("cannot connect");


$query1=mysqli_query($conn, "SELECT * FROM exeat_and_pass WHERE `exeat_status` = 'pending'");
echo "<table  border='2'><tr><th>S/N</th><th>MATRIC NUMBER</th><th>EXEAT TYPE</th><th>DESTINATION</th><th>DAY OF DEPARTURE</th><th>DAY OF RETURN</th><th>REASON FOR EXEAT</th></tr>";
while($query2=mysqli_fetch_array($query1))
		{
		echo "<tr><th>".$query2['id']."</th>";	
		echo "<th>".$query2['matric_number']."</th>";
		echo "<th>".$query2['exeat_type']."</th>";
		echo "<th>".$query2['destination']."</th>";
		echo "<th>".$query2['day_of_departure']."</th>";
		echo "<th>".$query2['day_of_arrival']."</th>";
		echo "<th>".$query2['reason_for_exeat']."</th>";
		echo "<th><a href='approve.php?id=".$query2['id']."'>APPROVE</a></th>";
		echo "<th><a href='deny.php?id=".$query2['id']."'>DENY</a></th></tr></table>";
		}






?>









</body>















</html>