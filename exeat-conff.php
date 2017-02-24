<?php


ob_start();

$servername="localhost";
$username="nancy";
$password="ipole";
$dbname="sms";
$tbl_name="exeat_and_pass";


// create connection
$conn = mysqli_connect("$servername", "$username", "$password","$dbname") or die ("cannot connect");


$matric_number = mysqli_real_escape_string($conn, $_POST['matric_number']);
$exeat_type = mysqli_real_escape_string($conn, $_POST['exeat_type']);
$reason_for_exeat = mysqli_real_escape_string($conn, $_POST['reason_for_exeat']);
$destination = mysqli_real_escape_string($conn, $_POST['destination']);
$day_of_departure = mysqli_real_escape_string($conn, $_POST['day_of_departure']);
$day_of_arrival = mysqli_real_escape_string($conn, $_POST['day_of_arrival']);
$exeat_status = mysqli_real_escape_string($conn, $_POST['exeat_staus']);


$sql = "INSERT INTO exeat_and_pass (matric_number, exeat_type, reason_for_exeat, destination, day_of_departure, day_of_arrival, exeat_status)
VALUES ('$_matric_number','$exeat_type', '$reason_for_exeat', '$destination', '$day_of_departure', '$day_of_arrival', 'pending')";


if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    echo $reason_for_exeat;
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}
 

ob_end_flush();




?>