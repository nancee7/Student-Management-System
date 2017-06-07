<?php


ob_start();

include("check_session.php");

$servername="localhost";
$username="nancy";
$password="ipole";
$dbname="sms";
$tbl_name="exeat_and_pass";


// create connection
$conn = mysqli_connect("$servername", "$username", "$password","$dbname") or die ("cannot connect");

$exeat_type = htmlentities(mysqli_real_escape_string($conn, $_POST['exeat_type']));
$matric_number = htmlentities(mysqli_real_escape_string($conn, $_POST['matric_number']));
$department = htmlentities(mysqli_real_escape_string($conn, $_POST['department']));
$destination = htmlentities(mysqli_real_escape_string($conn, $_POST['destination']));
$reason_for_exeat = htmlentities(mysqli_real_escape_string($conn, $_POST['reason_for_exeat']));
$day_of_departure = htmlentities(mysqli_real_escape_string($conn, $_POST['day_of_departure']));
$day_of_arrival = htmlentities(mysqli_real_escape_string($conn, $_POST['day_of_arrival']));



$sql = "INSERT INTO exeat_and_pass (exeat_type,matric_number,department, destination,day_of_departure,day_of_arrival,reason_for_exeat, exeat_status)
VALUES ('$exeat_type','$matric_number','$department','$destination','$day_of_departure','$day_of_arrival','$reason_for_exeat','pending')";


if(mysqli_query($conn, $sql)){
    echo "Thanks for applying you will recieve a response shortly. kindly exit the application. thank you";
    
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}
 

ob_end_flush();





?>