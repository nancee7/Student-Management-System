<?php
session_start();
if(isset($_SESSION['matric_number']))
{
	unset($_SESSION['matric_number']);
header("location:sms_login.php");
}


?>