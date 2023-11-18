<?php
session_start();
if(isset($_SESSION['admin']))
{
$admin=$_SESSION['admin'];
}
else
{
echo "<script>window.location.href='../loginadmin.php';</script>";
}
?>
<?php
if(isset($_POST['sub']))
{
$opass=$_POST['opass'];	
$npass=$_POST['npass'];	
$cpass=$_POST['cpass'];	
$realoldpassword=$_SESSION['pass'];
$admin=$_SESSION['admin'];
if($realoldpassword==$opass)
{
if($npass==$cpass)
{
include('../connection.php');	
$query="update rregister set password='$npass' where email='$admin'";
mysqli_query($con,$query);
echo "<script>alert('Password Changed.Login Again.');window.location.href='../loginadmin.php';</script>";
}
else
{
echo "<script>alert('New Password and Confirm Password not matched.');</script>";	
}
}
else
{
echo "<script>alert('Your Old Password not matched.');</script>";	
}	
}	
?>
<html>
<head>
<?php include('adminlink.php'); ?>
</head>
<body>
<?php include('adminheader.php'); ?>
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<form action="" method="POST">
<div class="row" style="background:#cbe3d2;margin:2%;padding:5%;font-size:20px;font-weight:bold;min-height:auto;">

<div class="col-lg-12 p-4" style="text-align:center;color:#4bcc5a;font-size:30px;">Change Your Password</div><br/>
<div class="col-lg-12">
Old Password<br/>
<input type="password" name="opass" class="form-control" placeholder="Your Current Password..."/></div><br/>
<div class="col-lg-12">
New Password<br/>
<input type="password" name="npass" class="form-control" placeholder="Your New Password..."/></div><br/>
<div class="col-lg-12">
Re-Enter Password<br/>
<input type="password" name="cpass" class="form-control" placeholder="Re-Enter New Password..."/></div><br/>
<div class="col-lg-12">
<div class="row pt-2">
<div class="col-lg-3"></div>
<div class="col-lg-6 py-3">
<input type="submit" style="background:#26365a;border:none;color:white;" name="sub" class="form-control " value="Change Password"/></div>
<div class="col-lg-3"></div>
</div>
</div>
</div>
</form>
</div>
<div class="col-lg-3"></div>
</div>
<?php include('adminfooter.php'); ?>
</body>
</html>