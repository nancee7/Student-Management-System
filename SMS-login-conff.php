<?php

ob_start();

$servername="localhost";
$username="nancy";
$password="ipole";
$dbname="sms";
$tbl_name="user";


// create connection
$conn = mysqli_connect("$servername", "$username", "$password","$dbname") or die ("cannot connect");



// to protect mysql injection and declare variables

$matric_number = mysqli_real_escape_string($conn, $_POST['matric_number']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql="SELECT * FROM $tbl_name WHERE matric_number='$matric_number' and password='$password'";
$result=mysqli_query($conn, $sql);

//mysql_num_row is counting table row
$count=mysqli_num_rows($result);

//if result matched $matric_number and $password, table row must be 1 row
if ($count==1) {
	//register $matric_number, $password and redirect to file "welcome.php"

session_start();
$_SESSION["matric_number"] = $matric_number;
$_SESSION["password"] = $password;
header("location:home.php");

}

else{

echo "Wrong Matric Number or Password";

}

ob_end_flush();
?>