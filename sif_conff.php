<?php


ob_start();

$servername="localhost";
$username="nancy";
$password="ipole";
$dbname="sms";
$tbl_name="user";


// create connection
$conn = mysqli_connect("$servername", "$username", "$password","$dbname") or die ("cannot connect");


$matric_number = htmlentities (mysqli_real_escape_string($conn, $_POST['matric_number']));
$first_name = htmlentities(mysqli_real_escape_string($conn, $_POST['first_name']));
$last_name = htmlentities(mysqli_real_escape_string($conn, $_POST['last_name']));
$email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
$date_of_birth = htmlentities(mysqli_real_escape_string($conn, $_POST['date_of_birth']));
$department = htmlentities(mysqli_real_escape_string($conn, $_POST['department']));
$level = htmlentities(mysqli_real_escape_string($conn, $_POST['level']));
$faculty = htmlentities(mysqli_real_escape_string($conn, $_POST['faculty']));
$phone_number = htmlentities(mysqli_real_escape_string($conn, $_POST['phone_number']));
$name_of_sponsors = htmlentities(mysqli_real_escape_string($conn, $_POST['name_of_sponsors']));
$phone_number_of_sponsors = htmlentities(mysqli_real_escape_string($conn, $_POST['phone_number_of_sponsors']));
$gender = htmlentities(mysqli_real_escape_string($conn, $_POST['gender']));
$state_of_origin = htmlentities(mysqli_real_escape_string($conn, $_POST['state_of_origin']));
$local_govt_area = htmlentities(mysqli_real_escape_string($conn, $_POST['local_govt_area']));


$sql = "UPDATE user SET matric_number='$matric_number',first_name='$first_name',last_name='$last_name',email='$email',date_of_birth='$date_of_birth',department='$department',level='$level',faculty='$faculty',phone_number='$phone_number',name_of_sponsors='$name_of_sponsors',phone_number_of_sponsors='$phone_number_of_sponsors',gender='$gender',state_of_origin='$state_of_origin',local_govt_area='$local_govt_area' WHERE matric_number='$matric_number'";

if(mysqli_query($conn, $sql)){
    header("Location:home.php");
    
} 

ob_end_flush();



?>