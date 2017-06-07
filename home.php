<!doctype html>

<?php
session_start();
if(!isset($_SESSION["matric_number"])){
header("location:sms_login.php");
}
?>

<html>
	
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">

  </style>

<script src="jquery.js">
  
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>


</script>
<script src="bootstrap.js"></script>



<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />

</head>
<body>
<div class="panel panel-body">
   <h4 class="text-muted"><img src="bingham logo1.jpg" alt="" height="60" width="60">BINGHAM UNIVERSITY</h2>
 <br/>
 <h4><center> STUDENT MANAGEMENT SYSTEM</center></h4>

<ul class="nav nav-tabs nav-justified">   
 <li class="active"><a href="home.php">Home</a></li>     
   <li><a href="sif.php">SIF</a></li>    
   <li><a href="exeat_allocation.php">Exeat and Pass</a></li>  
    <li ><a href="tutorial.php">Tutorials and self test</a></li> 
    
       
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
                      
       <li><a href="logout.php">
      <button class = "btn btn-primary">
             Logout
         </button>
             </a>

        </li> 

  </ul>   
<div id = "myCarousel" class = "carousel slide" data-ride="carousel" >
   
   <!-- Carousel indicators -->
   <ol class = "carousel-indicators">
      <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
      <li data-target = "#myCarousel" data-slide-to = "1"></li>
      <li data-target = "#myCarousel" data-slide-to = "2"></li>
   </ol>   
   
   <!-- Carousel items -->
   <div class = "carousel-inner" role="listbox">
      <div class = "item active left">
         <img src = "bhu1.jpg" alt = "First slide">
      </div>
      
      <div class = "item next left">
         <img src = "bhu2.jpg" alt = "Second slide">
      </div>
      
      <div class = "item">
         <img src = "bhu4.jpg" alt = "Third slide">
      </div>
   </div>
   
   <!-- Carousel nav -->
   <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">&lsaquo;</a>
   <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">&rsaquo;</a>  
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
           <p>It was desidned by a student that saw the need to reduce the burdern studebts face in exeat 
           and pass allocation and also in gatting thier hands on pass questin papers.
           the software was developed specially fot bingham university,by miss Nancy Ipole.
            <p> Thank you  </p>     
                    </p>  
         
                    </div>
                     </div>  
</div>














































</body>









</html>





