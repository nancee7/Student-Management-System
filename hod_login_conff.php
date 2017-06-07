<?php

ob_start();

$servername="localhost";
$username="nancy";
$password="ipole";
$dbname="sms";
$tbl_name="hod";


// create connection
$conn = mysqli_connect("$servername", "$username", "$password","$dbname") or die ("cannot connect");



// to protect mysql injection and declare variables

$staff_id = mysqli_real_escape_string($conn, $_POST['staff_id']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql="SELECT * FROM $tbl_name WHERE staff_id='$staff_id' and password='$password'";
$result=mysqli_query($conn, $sql);


//$_SESSION[]
//$students=$
//echo $departmentValue;


//mysql_num_row is counting table row
$count=mysqli_num_rows($result);

//if result matched $matric_number and $password, table row must be 1 row
if ($count==1) {
	//register $matric_number, $password and redirect to file "welcome.php"

session_start();
$_SESSION["staff_id"] = $staff_id;
$_SESSION["password"] = $password;
$_SESSION["department"] = $hod_department;
header("location:exeat-table.php");

}

else{

echo "Wrong Staff ID or Password";

}




ob_end_flush();
?>