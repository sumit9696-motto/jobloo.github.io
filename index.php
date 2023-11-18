<!DOCTYPE html>
<html>
    <head>
    <?php include ('link.php');?>


        <style>
  <?php include ('usercss.php');?>

        </style>
    </head>

    <body> 
        
        <div class="container-fluid mt-2">
<!--start menu headr bar -->

<?php include ('headermenu.php');?>


<!--end menu headr bar -->

<!-- start  top line bar -->


<!-- end  top line bar -->

<!-- start  top slider bar -->
<form method="post">
<div class="row">

    <div class="col-sm-12 bg-warning" style="height: 600px; background-size: 100% 100%; background-image: url(img/home-1/banner.jpg);">
    
    <div class="row">
        <div class="col-sm-12 text-center" style="background-color:rgba(0, 0, 0, .3); height: 600px;">
        <h1 class=" text-light " style="font-size: 50px; padding-top: 150px;">Find your <span class="text-warning">Desire</span> job</h1>
        
<span class="text-light" style="font-size:30px;">Jobs, Employment & Future Career Opportunities</span>
<div class="row">
  <div class="col-sm-1" ></div>
  <div class="col-sm-10 " style="background-color: rgba(255, 255, 255, .5); min-height: 90px; border-radius: 40px;">
 <div class="row pt-3 " >
<div class="col-sm-4  pt-2 "style=" border-radius:40px 0px 0px 40px; "><div class="input-group mb-3 inputgroup">
  <input type="text" class="form-control inputgroup" name="cname" placeholder="search by company name" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><span class="fa fa-search"></span></span>
  </div>
</div></div>
<div class="col-sm-4 pt-2 " ><div class="input-group mb-3 inputgroup">
  <input type="text" class="form-control inputgroup" name="locatation" placeholder="Search by locatation" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><span class="fa fa-map-marker"></span></span>
  </div>
</div></div>
<div class="col-sm-4  pt-2 "><button type="submit" name="search" class="btn btn-warning form-control " >Search Now</button></div>

</div>
 
  </div>
  <div class="col-sm-1" ></div>
</div><div class="row text-center">
      <div class="col-sm-2" ></div>
      <div class="col-sm-8 mt-5" ><button type="submit" class="btn btn-outline-warning  btn-lg " >Create your profile</button>
        <button type="submit" class="btn btn-outline-warning  btn-lg " >Upload Your CV</button></div>
      <div class="col-sm-2" ></div>
    </div>
        </div>
    </div>
    
    </div>
    
</div>
</form>
<!-- end  top slider bar -->


<!-- start  apply job prosses -->

<div class="row">
  <div class="col-sm-12 bg-success" style="height: 300px;"></div>
</div>


<!-- end  apply job prosses -->

<!-- start  job catagary -->
<div class="row ">
  <div class="col-sm-12 p-5 text-center"><h1>Choose Your Desire Category</h1></div>
</div>
<div class="row  " >
  <div class="col-sm-1"></div>

<?php  
include ('connection.php');
$query="select * from category order by cid desc limit 10";
$res=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($res))
{ ?>



  <div class="col-sm-2 text-center border p-3 my-5 "style="height: 200px;">
  <img src="admin/categoryimage/<?php echo $row[2] ?>" height="70px" width="100px" class="  clogo "> 
  <br> 
  <br><a href="#" style="text-decoration: none; color: black; font-weight:bold;font-size:22px;">  <?php echo $row[1] ?></a></div>
 
 
 <?php 
 }

?>
 
  <div class="col-sm-1"></div>
</div>



<!-- end  job catagary -->


<!-- start  trusted job  -->

<div class="container">
  <div class="row mt-5" >
    <div class="col-sm-4"><span > <img class="img-fluid" src="img/home-1/1.jpg"></span></div>
    <div class="col-sm-3"><span > <img class="img-fluid" src="img/home-1/2.jpg"></span> 
    <div class="bg-warning trusted" ><b style="color:black">100% Trusted</b></div>
    </div>
    <div class="col-sm-5"><h1>Trusted & Popular Job Portal</h1><br>Quis ipsum suspendisse ultrices gravida.
       Risus commodo viverra maecenas accumsan lacus vel facilisis. 
       Lorem ipsum dolor sit amet, consectetur.<br><br><br>
       <span class="btn btn-outline-warning btn-lg m-2">Post A Job <span class="fa fa-arrow-right"></span></span>
       
       <span class="btn btn-warning btn-lg m-2">Apply Now <span class="fa fa-arrow-right"></span></span>
      </div>
  </div>
</div>


<!-- end trusted job  -->

<!-- end resent job  -->
<div class="row" id="recentjob">

  <div class="col-sm-12 text-center p-5"><h1>Recent Jobs</h1></div>
</div>
<div class="container">
<div class="row mb-5">

  <div class="col-sm-2  "></div>
  <div class="col-sm-8 m-2 border p-4"><span class="btn btn-warning btn-lg m-1 px-3">ALL</span> <span class="btn btn-outline-warning  px-4 btn-lg m-1">New</span>
    <span class="btn btn-outline-warning btn-lg m-1 px-3">Featured</span> <span class="btn btn-outline-warning  px-4 btn-lg m-1">Recent</span>
    <span class="btn btn-outline-warning btn-lg m-1 px-3">Full Time</span> <span class="btn btn-outline-warning  px-4 btn-lg m-1">Part Time</span>
  </div>
  <div class="col-sm-2  "></div>
</div>
</div>

<div class="container">
  <div class="row mb-3">

<?php
$query3="SELECT j.* ,r .* FROM jobdetails j , rregister r WHERE j. rid=r.email order by j. jid desc limit 8" ;
$data3=mysqli_query($con,$query3);
while($row3=mysqli_fetch_array ($data3))
{
?>

    <div class="col-sm-6">
      <div class="row mr-3 mb-3  border border-dark pt-5" style="min-height: 200px;">
<div class="col-sm-2 " style="height: 150px;"><img src="admin/companylogo/<?php echo $row3['clogo'] ?>" class="img-fluid" style="padding-top: 40px;"></div>
<div class="col-sm-6 " style="height: 150px;">
<b style="font-size: 22px;"><?php echo $row3['title'] ?> (<?php echo $row3['jcategory'] ?>)</b><br>
<a href="#" style="color: orange; font-size: 18px;"><?php echo $row3['cname'] ?></a><br>
<span class="text-dark"><?php echo "Salary : ".$row3['salary'] ?></span> <br>
<span class="text-dark"><?php echo "Location : ".$row3['location'] ?></span>

</div>
<div class="col-sm-4 " style="height: 200px;">
<a href="loginuser.php">
<span class="btn btn-warning m-2 " style="border-radius: 0px;" >Apply <span class="fa fa-arrow-right">

</span></span></a>
  <span class="btn btn-warning m-2"> <?php echo $row3['post'] ?> Vacancy <span class="fa fa-arrow-right"> </span></span></div>
      </div>
    </div>
    
<?php
}
?>


  </div>



</div>


<!-- end resent job  -->
<!-- start pool of job  -->
<div class="row">
  <div class="col-sm-12 bg-success mb-5" style="height: 300px;"></div>
</div>



<!-- end pool of job  -->



<!--  start popular company  -->

<div class="container ">
<div class="row">
  <div class="col-sm-12" >   
  <h1 style=" text-align:center;"> popular companies </h1> </br>
  
   </div>
  </div>
  <div class="row">

<?php  

$query1="select * from rregister order by rdate desc limit 8";
$data=mysqli_query($con,$query1);
while ($r1=mysqli_fetch_array($data))
{
  


?>

  <div class="col-sm-3 mb-3">
  <div class="row m-4 border border-dark" style=" min-height:200px; text-align:center;">




  <div class="col-sm-12 p-4" >   
  <img src="admin/companylogo/<?php echo $r1['clogo']?>"  height="40px" width="80px" /><br/><br/>
  <a href="#"  style="font-weight:bold;" ><?php echo $r1['cname']?>   </a>
  <br>(<?php echo $r1['ctype']?> )<br> <br>
  <span class="fa fa-map-marker"   > </span> <span ><?php echo $r1['location']?></span>  <br/><br/>

  <button  class="btn btn-outline-warning hvr hvr-sweep-to-right">  <?php echo $r1['cname']?> </button>
   
  
   
   
   </div>
   </div>
  </div>
  


  <?php
  }
  ?>

</div>



</div>



<!--  end popular company  -->






<!-- start footer  -->


<?php include ('footer.php');?>

<!-- end footer -->






</div>
    </body>
</html>