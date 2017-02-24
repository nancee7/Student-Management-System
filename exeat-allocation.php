<!doctype html>
<html>
	
    <head>

         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
	
    </head>


<body>
   <h1>EXEAT ALLOCATION </h1>
	<form class="form-horizontal" role="form" method="post" action="exeat-conff.php">   
	 
	               <!--make exeat type a drop down menu-->    
		<div class="form-group">    
	        <label for="exeat_type" class="col-sm-2 control-label">Exeat Type</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" id="exeat_type" name="exeat_type" placeholder="Enter Your Destination"/>     
	            </div>  
	    </div> 

        <div class="form-group">    
	        <label for="destination" class="col-sm-2 control-label">Matric Number</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" id="matric_number" name="matric_number" placeholder="Enter Your Matric Number"/>     
	            </div>  
	    </div> 






        <div class="form-group">    
	        <label for="destination" class="col-sm-2 control-label">Destination</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter Your Destination"/>     
	            </div>  
	     </div> 



	    <div class="form-group">    
	        <label for="day_of_departure" class="col-sm-2 control-label">Day of Departure</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" id="day_of_departure"  name="day_of_departure" placeholder="Enter Your Duration"/>     
	            </div>  
	    </div> 


        <div class="form-group">    
	        <label for="day_of_arrival" class="col-sm-2 control-label">Day of Return</label>      
	            <div class="col-md-6">        
	                <input type="text" class="form-control" id="day_of_arrival" name="day_of_arrival" placeholder="Enter Your Duration"/>     
	            </div>  
	    </div> 

	                        
	    <div class="form-group"> 
            <div class="col-sm-offset-2 col-md-6">   
               <label for="reason_for_exeat">Reason for Exeat</label>  
                    <textarea class="form-control" rows="3" id="reason_for_exeat" name="reason_for_exeat">
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