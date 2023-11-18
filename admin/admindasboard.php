<?php 
session_start();

if (isset($_SESSION['admin']))
{
$admin=$_SESSION['admin'];

}
else
{

  echo "<script>window.location.href='loginadmin.php';</script>";
}

?>


<!DOCTYPE html>
<html>
    <head>
      <?php  include ('adminlink.php'); ?>
    </head>
    <body>
<div class="container-fluid"> 
    <!-- start header-->
    <div class="row">

        <div class="col-sm-12 text-center" style="height: 50px; background-color: black; color: orange;"><h1>WELCOME ADMIN ( <?php echo $admin ?>)</h1></div>
    </div>




<!-- end header-->
<!-- start menu logo-->

<?php include ('adminheader.php'); ?>




<!-- end menu logo-->


<!-- start dasboard -->
<div class="row ">
    <div class="col-sm-12 " style="background-color: #aac6ec;">
<div class="row">
<div class="col-sm-12 text-center">
    <span class=" text-center" style="height: 60px; background-color: black; color: orange;"><h1>Dashboard</h1></span>
    
    <span class="text-dark" style="font-size: 22px;">Code Your Prosperous career</span>

</div>

</div>
<div class=" container-fluid">
    <div class="row mt-5">
        <div class="col-sm-12">
            <div class="row mb-5 " >
<div class="col-sm-2"> 
  <div class="row m-1">
     <div class="col-sm-12 bg-success  " style="min-height: 200px; text-align:center;">
     <a href ="#" style="text-decoration:none; color:white; ">add job</a> 

    </div>
  </div>
</div>
<div class="col-sm-2"> 
  
  <div class="row m-1">
  <div class="col-sm-12 bg-dark " style="height: 200px;">

  </div>
</div>


</div>
<div class="col-sm-2"> 
  
  <div class="row m-1">
  <div class="col-sm-12 bg-dark " style="height: 200px;">

  </div>
</div>

</div>
<div class="col-sm-2"> 


  <div class="row m-1">
    <div class="col-sm-12 bg-dark " style="height: 200px;">

    </div>
  </div>


</div>
<div class="col-sm-2"> 
  
  <div class="row m-1">
    <div class="col-sm-12 bg-dark " style="height: 200px;">

    </div>
  </div>

</div>
<div class="col-sm-2"> 
  <div class="row m-1">
    <div class="col-sm-12 bg-dark " style="height: 200px;">

    </div>
  </div>


</div>

            </div>
        </div>
    </div>




    <div class="row  mb-4" >
      <div class="col-sm-2"> 
        <div class="row m-1">
          <div class="col-sm-12 bg-dark " style="height: 200px;">
      
          </div>
        </div>
      </div>
      <div class="col-sm-2"> 
        
        <div class="row m-1">
        <div class="col-sm-12 bg-dark " style="height: 200px;">
      
        </div>
      </div>
      
      
      </div>
      <div class="col-sm-2"> 
        
        <div class="row m-1">
        <div class="col-sm-12 bg-dark " style="height: 200px;">
      
        </div>
      </div>
      
      </div>
      <div class="col-sm-2"> 
      
      
        <div class="row m-1">
          <div class="col-sm-12 bg-dark " style="height: 200px;">
      
          </div>
        </div>
      
      
      </div>
      <div class="col-sm-2"> 
        
        <div class="row m-1">
          <div class="col-sm-12 bg-dark " style="height: 200px;">
      
          </div>
        </div>
      
      </div>
      <div class="col-sm-2"> 
        <div class="row m-1">
          <div class="col-sm-12 bg-dark " style="height: 200px;">
      
          </div>
        </div>
      
      
      </div>
      
                  </div>
              </div>
          </div>





</div>


    </div>
</div>


<!-- end dasboard -->
<!-- start footer -->


<div class="row">

  <div class="col-sm-12 text-center" style="height: 50px; background-color: black; font-size: 18px;line-height: 50px; ">
    
    <span  style="height: 50px; background-color: black; color: white;"> | &copy; 2020</span>
    <span style="color: orange;"> ||golo jolo pvt.ltd || </span>
    <span  style="height: 50px; background-color: black; color: white;"> devvelop byr raj mishra | </span>
  </div>
</div>



<!-- end footeer -->









</div>

    </body>
</html>