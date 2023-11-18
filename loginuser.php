<?php  
session_start();

if(isset($_POST['login']))
{ 
$uid=$_POST['uid'];
$pass=$_POST['pass'];
include ('connection.php');
$query=" select * from uregister where email='$uid' and password='$pass'";

$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);

if($count>0)
{
$_SESSION['admin']=$uid;
    echo "<script>alert('Login Successful ');window.location.href='user/userdasboard.php';</script>";



}
else 
{

    echo "<script>alert('Login not Successful .Try Again.');</script>";


}
}




?>




<!DOCTYPE html>
<html>

<head>
<?php include ('link.php');?>
<style>
<?php include ('usercss.php');?>

</style>

</head>
<body>
   <?php include ('headermenu.php') ?> 
   
<div class="container">
<form action="" method="post">

<div class="row p-5 ">
<div class="col-sm-3"></div>
<div class="col-sm-6  border border-primary" style="background:linear-gradient(#b2f6c8,#b2f6c8,#dbdbdb); box-shadow: 0px 0px 10px 5px rgba(6, 226, 79,0.5);">
    <h4 class="text-center p-5"> WELCOME BACK LOGIN AGAIN   <span class="text-primary">USER</span> <i>!</i></h4>
    <input type="text" class="form-control mb-3" placeholder="Enter your user name " name="uid" required>
    <input type="password" class="form-control mb-3" placeholder="Enter your password " name="pass" required>
    <button type="submit" class="btn btn-warning form-control mb-5" name="login"><span style="font-size: 20px;" >Login </span></button>

<div class="row">
    <div class="col-sm-6 mb-5"><a href="#">forgot password</a></div>
    <div class="col-sm-6 mb-5"><a href="regisstration.php">Register for an account?</a></div>
</div>
</div>
<div class="col-sm-3"></div>


</div>
   


</form>
    
</div>
 


 <?php include ('footer.php'); ?>
</body>
</html>