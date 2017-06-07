
	
<?php

include('configuration.php');

if(isset($_GET['id']))
			{
			$id=$_GET['id'];

			$query3=mysqli_query($conn, "update exeat_and_pass set exeat_status = 'hodDenied' where id='$id'");
			if($query3)
			{
			header('location:exeat_table.php');
			}

 $query1=mysqli_query($conn, "select * from exeat_and_pass where id='$id'");
			$query2=mysqli_fetch_array($query1);
		}
?>