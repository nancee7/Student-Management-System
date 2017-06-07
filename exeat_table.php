<!doctype html>
<html>

<head>
	
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
        <script src="jquery.js"></script>
        <script src="bootstrap.js"></script>

</head>


<body>
<h2>EXEAT AND PASS TABLE</h2>
	
<?php

//include("check_session.php");


  //session_start();
 $servername="localhost";
 $username="nancy";
 $password="ipole";
 $dbname="sms";
 $tbl_name="exeat_and_pass";

 $conn = mysqli_connect("$servername", "$username", "$password","$dbname") or die ("cannot connect");

//$query2=mysqli_query($conn, "SELECT * FROM hod WHERE 'staff_id' = '$staff_id' and 'department' = '$hod_department' ")

 //$dept=$_SESSION['department'];

$query1=mysqli_query($conn, "SELECT * FROM exeat_and_pass WHERE `exeat_status` = 'pending' ");
echo '<table  class="table table-bordered table-striped" ><tr><th>S/N</th><th>MATRIC NUMBER</th><th>DEPARTMENT</th><th>EXEAT TYPE</th><th>DESTINATION</th><th>DAY OF DEPARTURE</th><th>DAY OF RETURN</th><th>REASON FOR EXEAT</th></tr>';
while($query2=mysqli_fetch_array($query1))
		{
		echo "<tr><td>".$query2['id']."</td>";	
		echo "<td>".$query2['matric_number']."</td>";
		echo "<td>".$query2['department']."</td>";
		echo "<td>".$query2['exeat_type']."</td>";
		echo "<td>".$query2['destination']."</td>";
		echo "<td>".$query2['day_of_departure']."</td>";
		echo "<td>".$query2['day_of_arrival']."</td>";
		echo "<td>".$query2['reason_for_exeat']."</td>";
		echo "<th><a href='approve.php?id=".$query2['id']."'>APPROVE</a></th>";
		echo "<th><a href='deny.php?id=".$query2['id']."'>DENY</a></th></tr>";
		}
echo '</table>';


?>

</body>















</html>