<!doctype html>

<html>
   <head>

       <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
       <link type="text/javascript" href="bootstrap/js/bootstrap.js"/>
       <script src="jquery.js"></script>
       <script src="bootstrap.js"></script>

     </head>	

<?php
include ("configuration.php");
include ("check_session.php");


$user=$_SESSION['matric_number'];

$query="SELECT * FROM user WHERE matric_number='".$user."'";
$user_detail=mysqli_query($conn,$query);
//$user_details=mysqli_fetch_array($user_detail);
while($row=mysqli_fetch_array($user_detail))
		{
?>

  <body>
  <h2 class="text-muted"><img src="bingham logo1.jpg" alt="" height="60" width="60">BINGHAM UNIVERSITY</h2>
    <ul class="nav nav-tabs nav-justified">   
         <li ><a href="home.php">Home</a></li>     
         <li class="active" ><a href="sif.php">SIF</a></li>    
         <li ><a href="exeat_allocation.php">Exeat and Pass</a></li>  
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

   
   <center><h1>PROFILE</h1></center>

    <form class="form-horizontal" role="form" method="post" action="sif_conff.php">   
	 
	                  
		<div class="form-group">
		    <div></div>
	        <label for="id" class="col-sm-2 control-label">S/N</label>      
	            <div class="col-md-6 input-group"> 
	                   <div class="input-group-addon">
                         <span class="glyphicon glyphicon-edit"></span> 
                       </div>       
	                <input type="text" class="form-control" id="id" name="id" placeholder="Enter Your Exeat Type"/>     
	                  
	            </div>  
	    </div> 

        <div class="form-group">    
	        <label for="matric_number" class="col-sm-2 control-label">Matric Number</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" value="<?php echo $row['matric_number'];  ?>"  id="matric_number" name="matric_number" placeholder="Enter Your Matric Number"/>     
	            </div>  
	    </div> 



        <div class="form-group">    
	        <label for="first_name" class="col-sm-2 control-label">First Name</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" value="<?php echo $row['first_name'];  ?>" id="first_name" name="first_name" placeholder="Enter Your Destination"/>     
	            </div>  
	     </div> 

     

	    <div class="form-group">    
	        <label for="last_name" class="col-sm-2 control-label">Last Name</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" value="<?php echo $row['last_name'];  ?>"  id="last_name"  name="last_name" placeholder="Enter Your Day of Departure"/>     
	            </div>  
	    </div> 
         
             

        <div class="form-group">    
	        <label for="email" class="col-sm-2 control-label">Email</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" value="<?php echo $row['email'];  ?>" id="email" name="email" placeholder="Enter Your Day of Return"/>     
	            </div>  
	    </div> 


 <div class="form-group">    
	        <label for="date_of_birth" class="col-sm-2 control-label">Date of Birth</label>      
	            <div class="col-md-6">        
	                <input type="date" class="form-control" value="<?php echo $row['date_of_birth'];  ?>" id="date_of_birth" name="date_of_birth" placeholder="Enter Your Day of Return"/>     
	            </div>  
	    </div> 


 <div class="form-group">    
	        <label for="department" class="col-sm-2 control-label">Department</label>      
	            <div class="col-md-6">        
	              <select name="department" class="form-control" >
	              	<option value="">------select your department---------</option>
	              	<option value="computer science">computer science</option>
	              	<option value="accounting">accounting</option>
	              	<option value="mass communication">mass communication</option>
	              	<option value="political science">political science</option>

	              </select> 
	            </div>  
	    </div> 

 <div class="form-group">    
	        <label for="level" class="col-sm-2 control-label">Level</label>      
	            <div class="col-md-6"> 
	             <select name="level" class="form-control" >
	              	<option value="">------select your level---------</option>
	              	<option value="100">100</option>
	              	<option value="200">200</option>
	              	<option value="300">300</option>
	              	<option value="400">400</option>

	              </select>        
	                
	            </div>  
	    </div> 

 <div class="form-group">    
	        <label for="faculty" class="col-sm-2 control-label">Faculty</label>      
	            <div class="col-md-6">        
	                <select name="faculty" class="form-control" >
	              	<option value="">------select your faculty ---------</option>
	              	<option value="Science and Technology">Science and Technology</option>
	              	<option value="College of Health Sciences">College of Health Sciences</option>
	              	<option value="HSMS">HSMS</option>

	              </select> 
	            </div>  
	    </div> 

	 <div class="form-group">    
	        <label for="phone_number" class="col-sm-2 control-label">Phone Number</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" value="<?php echo $row['phone_number'];  ?>" id="phone_number" name="phone_number" placeholder="Enter Your Day of Return"/>     
	            </div>  
	    </div> 


 <div class="form-group">    
	        <label for="name_of_sponsors" class="col-sm-2 control-label">Name of Sponsors</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" value="<?php echo $row['name_of_sponsors'];  ?>" id="name_of_sponsors" name="name_of_sponsors" placeholder="Enter Your Day of Return"/>     
	            </div>  
	    </div> 

 <div class="form-group">    
	        <label for="phone_number_of_sponsors" class="col-sm-2 control-label">Phone Number of Sponsors</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" value="<?php echo $row['phone_number_of_sponsors'];  ?>" id="phone_number_of_sponsors" name="phone_number_of_sponsors" placeholder="Enter Your Day of Return"/>     
	            </div>  
	    </div> 

 <div class="form-group">    
	        <label for="gender" class="col-sm-2 control-label">Gender</label>      
	            <div class="col-md-6">        
	                <select name="gender" class="form-control" >
	              	<option value="">------select---------</option>
	              	<option value="female">Female</option>
	              	<option value="male">Male</option>

	              </select> 
	            </div>  
	    </div> 

 <div class="form-group">    
	        <label for="state_of_origin" class="col-sm-2 control-label">State of Origin</label>      
	            <div class="col-md-6">        
	                <select name="state_of_origin" class="form-control" >
	              	<option value="">------select your state of origin---------</option>
	              	<option value="Kaduna">Kaduna</option>
	              	<option value="Nassarawa">Nassarawa</option>
	              	<option value="Plateau">Plateau</option>
	              	<option value="Abia">Abia</option>

	              </select> 
	            </div>  
	    </div> 

          <div class="form-group">    
	        <label for="local_govt_area" class="col-sm-2 control-label">Local Govt Area</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" value="<?php echo $row['local_govt_area'];  ?>" id="local_govt_area" name="local_govt_area" placeholder="Enter Your Day of Return"/>     
	            </div>  
	    </div> 

	    <div>
           <center>
                <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary"/> 
            </center>
        </div>                                   
     </form>  


 </form>


<?php } ?>


























</body>





</html>