<!doctype html>
<html>



	
    <head>

         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
	     <script src="jquery.js"></script>
         <script src="bootstrap.js"></script>

     


    </head>


<body>
 <h2 class="text-muted"><img src="bingham logo1.jpg" alt="" height="60" width="60">BINGHAM UNIVERSITY</h2>
    <ul class="nav nav-tabs nav-justified">   
         <li ><a href="home.php">Home</a></li>     
         <li><a href="sif.php">SIF</a></li>    
         <li class="active"><a href="exeat_allocation.php">Exeat and Pass</a></li>  
         <li><a href="tutorial.php">Tutorials and Self-Test</a></li>   
         <li class="dropdown">      
             <a class="dropdown-toggle" data-toggle="dropdown" href="#">       
               Contact Us <span class="caret">
              
              </span>   </a>      
             <ul class="dropdown-menu">         
              <li><a href="#">Email:nacyipole@gmail.com</a></li>      
                  <li><a href="#">Phone-number:9484747</a></li>         
                  <li><a href="#">Adress:Bingham University Karu, Nassarawa State Nigeria</a></li>        
                   </li>      
                    </ul>   
                     </li> 
          <li><a href="logout.php">
               <button class = "btn btn-primary">
                Logout
               </button>
               </a>

           </li> 

  </ul> 

  <?php
  include ("check_session.php");
 $servername="localhost";
 $username="nancy";
 $password="ipole";
 $dbname="sms";
 $tbl_name="exeat_and_pass";

 $conn = mysqli_connect("$servername", "$username", "$password","$dbname") or die ("cannot connect");




$user=$_SESSION['matric_number'];

$query="SELECT * FROM user WHERE matric_number='".$user."'";
$user_detail=mysqli_query($conn,$query);
//$user_details=mysqli_fetch_array($user_detail);
while($row=mysqli_fetch_array($user_detail))
		{
?>


   <h1>EXEAT AND PASS ALLOCATION </h1>
	
	<form class="form-horizontal" role="form" method="post" action="exeat_conff.php"  >   
	     
	                   
		<div class="form-group">
		    
	        <label for="exeat_type" class="col-sm-2 control-label">Exeat Type</label>      
	            <div class="col-md-6">        
	                <select name="exeat_type" class="form-control" required>
	              	<option value="">------choose your exeat type---------</option>
	              	<option value="EXEAT">EXEAT</option>
	              	<option value="PASS">PASS</option>
	              </select>     
	            </div>  
	    </div> 

        <div class="form-group">    
	        <label for="matric_number" class="col-sm-2 control-label">Matric Number</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" id="matric_number" value="<?php echo $row['matric_number'];  ?>" name="matric_number" placeholder="Enter Your Matric Number"required />     
	            </div>  
	    </div> 
           <?php } ?>
        <div class="form-group">    
	        <label for="department" class="col-sm-2 control-label">Department</label>      
	            <div class="col-md-6">        
	                <select name="department" class="form-control" required>
	              	<option value="">------select your department---------</option>
	              	<option value="computer science">computer science</option>
	              	<option value="accounting">accounting</option>
	              	<option value="mass communication">mass communication</option>
	              	<option value="political science">political science</option>

	              </select>      
	            </div>  
	    </div> 

        <div class="form-group">    
	        <label for="destination" class="col-sm-2 control-label">Destination</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter Your Destination" required />     
	            </div>  
	     </div> 



	    <div class="form-group">    
	        <label for="day_of_departure" class="col-sm-2 control-label">Day of Departure</label>      
	            <div class="col-md-6">        
	                <input type="date" class="form-control" id="day_of_departure"  name="day_of_departure" placeholder="Enter Your Day of Departure" required />     
	            </div>  
	    </div> 


        <div class="form-group">    
	        <label for="day_of_arrival" class="col-sm-2 control-label">Day of Return</label>      
	            <div class="col-md-6">        
	                <input type="date" class="form-control" id="day_of_arrival" name="day_of_arrival" placeholder="Enter Your Day of Return" required />     
	            </div>  
	    </div> 

	                        
	    <div class="form-group"> 
            <div class="col-sm-offset-2 col-md-6">   
               <label for="reason_for_exeat">Reason for Exeat</label>  
                    <textarea class="form-control" rows="3" id="reason_for_exeat" name="reason_for_exeat" required >
                    </textarea>
            </div> 
        </div>
	                                     
	                                        
        <div>
           <center>
                <input id="submit" name="submit" type="submit" value="Apply" class="btn btn-primary"/> 
            </center>
        </div>                                   
     </form>  

 </body>

</html>