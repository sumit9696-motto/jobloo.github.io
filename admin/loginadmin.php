<?php  
session_start();

if(isset($_POST['login']))
{
$uid=$_POST['uid'];
$pass=$_POST['pass'];
include ('connection.php');
$query=" select * from rregister where email='$uid' and password='$pass'";

$res=mysqli_query($con,$query);
$count=mysqli_num_rows($res);

if($count>0)
{
$_SESSION['admin']=$uid;
    echo "<script>alert('Login Successful ');window.location.href='admindasboard.php';</script>";



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
    <?php  include ('adminlink.php') ?>
</head>
<body>
    <div class="container-fluid">
    <?php include ('adminloginmenu.php'); ?> </div>
<div class="container">
    <form action="" method="post">
<div class="row p-5 ">
<div class="col-sm-3"></div>
<div class="col-sm-6  border border-success" style="background: linear-gradient(#c1daee,#c1d8eb,#ffc107); box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, .3);">
    <h4 class="text-center p-5"> WELCOME BACK LOGIN AGAIN   <span class="text-warning">ADMIN</span> <i>!</i></h4>
    
    
    
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text text-warning"><i class="fa fa-user"></i></span>
        </div>
        <input type="text" name="uid" class="form-control" placeholder="Enter your username" required>
        
    </div>



    
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text text-warning"><i class="fa fa-key"></i></span>
        </div>
        <input type="password" name="pass" class="form-control" placeholder="password" required>
    </div>



    <button name="login" type="submit" class="btn btn-warning form-control mb-5"><span style="font-size: 20px;">Login </span></button>

<div class="row">
    <div class="col-sm-6 mb-5"><a href="#">forgot password</a></div>
    <div class="col-sm-6 mb-5"><a href="rrigister.php">Register for an account?</a></div>
</div>
</div>
<div class="col-sm-3"></div>


</div>
    </form>



    
</div>
<div class="container-fluid">
<?php  include ('adminloginfooter.php'); ?>
</div>
</body>
</html>