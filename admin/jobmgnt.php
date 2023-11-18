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
<?php 
if(isset($_REQUEST['del']))
{
  $jid=$_REQUEST['jid'];
  include ('connection.php');
  $query3="delete from jobdetails where jid=$jid";
 $res3=mysqli_query($con,$query3);
if($res3)
{

  echo "<script>alert('job deleted successfully.');window.location.href='jobmgnt.php';</script>";

}
}

?>



<!DOCTYPE html>
<html>

<head>
    <?php  include ('adminlink.php'); ?>

</head>
<body>
<!-- start menu logo-->

<?php include ('adminheader.php'); ?>




<!-- end menu logo-->

<div class="row">
<div class="col-sm-12" style="text-align:center"> <b> JOB  MANAGEMENT</b></div>
<div class="col-sm-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">JOB Category </th>
      <th scope="col">Title</th>
      <th scope="col">Salary</th>
      <th scope="col">Experience</th>
      <th scope="col">Description</th>
      <th scope="col">Skill</th>
      <th scope="col">Location</th>
      <th scope="col">Post</th>
      <th scope="col">date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php
include ('connection.php');

$query1="select * from jobdetails where rid ='$admin' order by jid desc";
$data1=mysqli_query($con,$query1);
$i=1;
while($row1=mysqli_fetch_array($data1))
{


  ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row1 [2] ?></td>
      <td><?php echo $row1 [3] ?></td>
      <td><?php echo $row1 [4] ?></td>
      <td><?php echo $row1 [5] ?></td>
      <td><?php echo $row1 [6] ?></td>
      <td><?php echo $row1 [7] ?></td>
      <td><?php echo $row1 [8] ?></td>
      <td><?php echo $row1 [9] ?></td>
      <td><?php echo $row1 [10] ?></td>
      
      <td> <a href="jobmgnt.php?del=1&jid=<?php echo $row1 [0] ?>"><span class="fa fa-trash" style="color:red;"> </span></a></td>
    </tr>


    <?php
$i++;
}?>
    
  </tbody>
</table>





</div>
</div>



<!-- start footer -->


<div class="row">

    <div class="col-sm-12 text-center" style="height: 50px; background-color: black; font-size: 18px;line-height: 50px; ">
      
      <span  style="height: 50px; background-color: black; color: white;"> | &copy; 2020</span>
      <span style="color: orange;"> ||golo jolo pvt.ltd || </span>
      <span  style="height: 50px; background-color: black; color: white;"> devvelop by sumit rai| </span>
    </div>
  </div>
  
  
  
  <!-- end footeer -->
  

</body>
</html>