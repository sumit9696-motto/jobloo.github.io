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
  $cid=$_REQUEST['cid'];
  include ('connection.php');
  $query3="delete from category where cid=$cid";
 $res3=mysqli_query($con,$query3);
if($res3)
{

  echo "<script>alert('category deleted successfully.');window.location.href='addcategory.php';</script>";

}
}

?>



<?php
if(isset($_POST['sub']))
{
$category=$_POST['category'];

$imname=$_FILES['cimage'] ['name'];
$imtmpname=$_FILES['cimage'] ['tmp_name'];
$imtype=$_FILES['cimage']['type'];

if ($imtype=="image/png")
{
$con=mysqli_connect("localhost","root","","jobportal");
$query="insert into category (cname,cimage,cdate) values('$category','$imname',curdate())";
//echo $query;
$res=mysqli_query($con,$query);
mysqli_close($con);
if($res)
{
	move_uploaded_file($imtmpname,"categoryimage/$imname");
	echo "<script>alert('Category saved successfully.');</script>";



}
}
else 
{
	echo "<script>alert('Only PNG image ');</script>";

}
}
?>
<html>
<head>
<?php include('adminlink.php'); ?>
<style>
#outer1{
	padding:3%;
	margin:3%;
	border:1px solid black;
	min-height:300px;
	background:#e8e8ff;
	text-align:center;
}
</style>
</head>
<body>
<?php include('adminheader.php'); ?>
<div class="row" style="min-height:500px;">
<div class="col-sm-5">
<form action="" method="post" enctype="multipart/form-data">
<div class="row" id="outer1">

<div class="col-sm-12" style="text-align:center;font-size:24px;font-weight:bold;">
ADD NEW JOB CATEGORY</div>
Add New Category :
<input type="text" name="category" class="form-control"/></br>
Category Logo: (only PNG image Accepted.......)
<input type="file" name="cimage" class="form-control"/> </br> </br>

<input type="submit" name="sub" class="btn btn-info form-control" value="ADD NOW"/>
</div>
</form>
</div>


<!-- start catagery    -->

<div class="col-sm-7">
<div class="col-sm-12" style="text-align:center"> <b> CATAGARY MANAGEMENT</b></div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Category Name</th>
      <th scope="col">Image</th>
      <th scope="col">Addrd Date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php
include ('connection.php');
$query1="select * from category order by cid desc";
$data1=mysqli_query($con,$query1);
$i=1;
while($row1=mysqli_fetch_array($data1))
{


  ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row1 [1] ?></td>
      <td><img src="categoryimage/<?php echo $row1 [2] ?>" height="40px" width="50px"/></td>
      <td><?php echo $row1 [3] ?></td>
      <td> <a href="addcategory.php?del=1&cid=<?php echo $row1 [0] ?>"><span class="fa fa-trash" style="color:red;"> </span></a></td>
    </tr>


    <?php
$i++;
}?>
    
  </tbody>
</table>





</div>




</div>
<?php include('adminfooter.php'); ?>
</body>
</html>