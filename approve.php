<!doctype html>
<html>
	
<body>
	
<?

inclde('configuration.php');

if(isset($_GET['id']))
			{
			$id=$_GET['id'];

			$query3=mysql_query("update exeat_and_pass set exeat_status = 'hodApproved' where id='$id'");
			if($query3)
			{
			header('location:exeat_table.php');
			}

 $query1=mysql_query("select * from exeat_and_pass where id='$id'");
			$query2=mysql_fetch_array($query1);
?>



















</body>














</html>