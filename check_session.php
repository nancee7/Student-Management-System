<?php
session_start();

if (!isset($_SESSION['matric_number'])){
   header("location:SMS-login.php");
}

?>