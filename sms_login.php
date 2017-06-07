<!doctype html>
<html>

<head>
<style type="text/css">
form{
	margin-top: 80px;
}
</style>
     
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
	  <link rel="stylesheet" href="bootstrap/js/bootstrap.js" />
	  <script src="jquery.js"></script>
      <script src="bootstrap.js"></script>


</head>


<body>


<p class="pull-right"> <button type="button" class="btn btn-link">ADMIN-LOGIN</button> </p>

 <div class="container">
	   
	   <form class="" role="form" method="post" action="sms_login_conff.php">   
	        <div class="row form-group-">
	 	       <div class="col-md-4 col-md-offset-4">
	 		        <div class="login-panel panel panel-default">
	 			              <div class="panel-heading">
	 			              
	 				
	 				         <h1 class="panel-title"><center>STUDENT LOGIN</center></h1>
	 			             </div>
	 			
	 			              <center>
								 <div >
								 <img src="bingham logo1.jpg" class="img-circle "  height="150">
								 </div>
                             <p><h3><strong><font color="purple">STUDENT MANAGEMENT SYSTEM</font></strong></h3></p>
							 </center>
	 			<fieldset >
                   <div class="form-group" >
         	           <input class="form-control" placeholder="Matric_Number" id="matric_number" name="matric_number" type="text" size="15" autofocus required/>
                    </div>

                    <div class="form-group">
        	           <input class="form-control" placeholder="Password" id="password" name="password" type="password" autofocus autocomplete=off size="40" required/>
                     </div>
                      <center> <input id="submit" name="submit" type="submit" value="Login" class="btn btn-primary btn-block"> </center>
            
	 		       </div>
                </fieldset>
	 	       </div>
     
			</div>
		</form>
 </div>

	 
</body>











</html>