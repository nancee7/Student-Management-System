<!doctype html>

<?php
session_start();
if(!isset($_SESSION["matric_number"])){
header("location:SMS-login.php");
}
?>

<html>
	
<head>
	<style type="text/css"  >

  

</style>


<script type="text/javascript">
  
 

</script>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link type="text/javascript" href="bootstrap/js/bootstrap.js"/>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>


<body>

<ul class="nav nav-tabs">   
 <li class="active"><a href="#">Home</a></li>     
   <li><a href="#">SIF</a></li>    
   <li><a href="#">Exeat and Pass</a></li>  
     <li><a href="#">Tutorials and Self-Test</a></li>   
      


    <li><a href="logout.php">Logout</a></li> 







      </ul>  

<div><img src="bingham logo2.jpg" class="img-rounded push-left" height="100"></div>
	
<div><center> <h1>STUDENT MANAGEMENT SYSTEM</h1></center></div>




<div class="row">
	<div class="col-sm-6 col-md-3">
		
		<a href="#" class="thumbnail">
			<img src="mum&dad.jpg" alt="generic placeholder thumbnail">
		</a>
	</div>


<div class="col-sm-6 col-md-3">
		
		<a href="#" class="thumbnail">
			<img src="moi.jpg" alt="generic placeholder thumbnail">
		</a>
	</div>


<div class="col-sm-6 col-md-3">
		
		<a href="#" class="thumbnail">
			<img src="mum&dad.jpg" alt="generic placeholder thumbnail">
		</a>
	</div>


	<div class="col-sm-6 col-md-3">
		
		<a href="#" class="thumbnail">
			<img src="mee.jpg" alt="generic placeholder thumbnail">
		</a>
	</div>



</div>








<div class="container">    <h1>About SMS</h1>  
   <div class="row">  
      <div class="col-sm-6 col-md-6 col-lg-6"  
      style="background-color: #dedef8; box-shadow:         
        inset 1px -1px 1px #444, inset -1px 1px 1px #444;">      
            <p>The SMS(Student Management System) is a system designed to curb difficulties in
            the collection of data in the student affairs through tne Student Information Form,
            also aid in exeat and pass allocation and also aid in getting tutorials and then
            self-test examinations.       
                        </p>  
        
                             </div> 


      <div class="col-sm-6 col-md-6 col-lg-6" style="background-color: #dedef8;box-shadow:        
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;">        
           <p>for help and to get more information about the the SMS please contact our
            email nancyipole@gmail.com or call the following numbers: 047494038, 049404039. Thank you       
                    </p>  
         
                    </div>
                     </div>  













































</body>









</html>







