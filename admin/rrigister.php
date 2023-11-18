<?php
if(isset($_POST['submit1']))
{
	$name=$_POST['name'];
	$mobno=$_POST['mobno'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$cname=$_POST['cname'];
	$ctype=$_POST['ctype'];
	$fields=$_POST['fields'];
	$location=$_POST['location'];
	$tmpname=$_FILES['logo']['tmp_name']; //tmp_name of file
	$fname=$_FILES['logo']['name'];  //filename
	$ftype=$_FILES['logo']['type']; // type of file
	include ('connection.php');
	$query="insert into rregister values('$name','$mobno','$email','$pass','$cname','$fname','$location','$ctype','$fields',curdate())";
	//echo $query;
	$res=mysqli_query($con,$query);
	if($res)
{
	move_uploaded_file($tmpname,"companylogo/$fname");
	echo "<script>alert('Register Successfully . Go for Login .');</script>";
}
	else
{
	echo "<script>alert('Register not Successful .Try Again.');</script>";
}
mysqli_close($con);
}
?> 
 <html>
<head>

 <?php include('adminlink.php');
?>
 <style>
 .head
 {
	 min-height:500px;
	 
	 
 }
 .text
 {
	 width:400px;
 }
 </style>
 
</head>
<body>
<?php include('adminloginmenu.php');
?>


<div class="container">
<div class="row bg-light">
    <div class="col-sm-12">
	<form  action="" method="post" enctype="multipart/form-data" >
    <div class="container mt-5 border border-dark">
       <h1 class="text-dark text-center mb-5"> ADMIN REGISTRATION FORM !</h1>
       <div class="row">
        <div class="col-sm-6">
    <div class="form-group">
      <label for="dob">Name :</label>
      <input type="text" name="name" class="form-control" id="dob" required>
    </div></div>
    <div class="col-sm-6">
    <div class="form-group">
      <label for="exampleInputPassword1" >MOBIL N. :</label>
      <input type="number" class="form-control" name="mobno" id="exampleInputPassword1" placeholder="Enter your MOBILNUMBER" required>
    </div>
   </div>
  </div>
        
        
      
      <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label for="exampleInputPassword1" >Email id :</label>
              <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

            </div>
           </div>
          <div class="col-sm-6">
      <div class="form-group">
        <label for="dob">password :</label>
        <input type="password" name="pass" class="form-control" id="dob" required>
      </div></div>
      
    </div>

    

    <div class="row">

        <div class="col-sm-6">
            <div class="form-group">
              <label for="dob">company name :</label>
              <input type="text" name="cname" class="form-control" id="dob" required>
            </div></div>



        <div class="col-sm-6 ">
        <div class="form-group">
        <label for="exampleFormControlFile1">Company logo</label>
        <input type="file" class="form-control-file border " name="logo" id="exampleFormControlFile1" required>
        </div>
        </div>

      
        </div>  






<!-- end job and skil-->

<!--uploading start -->
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
          <label for="exampleInputPassword1" >location:</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="location" placeholder="Enter your company name" required>
        </div>
       </div>
      

<div class="col-sm-6 my-3 ">
    <label for="exampleFormControlFile1">Choose company type</label>
    <select name="ctype" class="form-control">
        <option>COMPANY TYPE</option>
        <option>PRIVATE</option>
        <option>GOVERNMENT</option>
        <option>PUBLIC SECTOR</option>
        <option>SEMI-GOVERNMENT</option>
        </select>
</div>

</div>

<div class="row">
    <div class="col-sm-12">
    <label for="Textarea">Working Filds</label>
    <textarea class="form-control " name="fields" id="validationTextarea" placeholder="Enter your working filds" required></textarea>
    
  </div>
</div>



<!--uploading end -->


<div class="col-sm-4"></div>
<div class="col-sm-4">
<button type="submit" name="submit1" class="btn btn-primary m-4 form-control btn-lg"> <h4>submit</h4> </button>
</div>




</div>

</form>

</div>
</div>
</div>









	<?php include('adminloginfooter.php');
?>
</body>
</head>