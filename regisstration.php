<?php  
if(isset($_POST['sub']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $dob=$_POST['dob'];
  $mobno=$_POST['mobno'];
  $gen=$_POST['gen'];
  $highq=$_POST['highq'];
  $jobtitle=$_POST['jobtitle'];
  $skills=$_POST['skills'];
  

  $picname=$_FILES['photo']['name'];
  $pictmpname=$_FILES['photo']['tmp_name'];

  $cvpicname=$_FILES['cv']['name'];
  $cvpictmpname=$_FILES['cv']['tmp_name'];

  include ('connection.php');
  $query="insert into uregister(name,email,password,dob,mobno,gen,highq,jobtitle,skills,picname,cvpicname,rdate) 
  
  values ('$name','$email','$pass','$dob','$mobno','$gen','$highq','$jobtitle','$skills','$picname','$cvpicname',curdate())";
  $res=mysqli_query($con,$query);
  if ($res)
  {
    move_uploaded_file($pictmpname,"userpic/$picname");
    move_uploaded_file($cvpictmpname,"usercvpic/$cvpicname");
    echo "<script>alert('Register Successfully . Go for Login .');</script>";
  }
  else {
    echo "<script>alert('Register not Successful .Try Again.');</script>";

  }
mysqli_close($con);
}
?>



<!DOCTYPE html>
<html>
    <head>
     <?php  include ('link.php'); ?>
    
     <style>
     
     <?php  include ('usercss.php'); ?>
     
     </style>
    </head>
    <body>
      
    <?php  include ('headermenu.php'); ?>
        <div class="row p-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 bg-light">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="container mt-5 border border-dark">
           <h1 class="text-dark text-center mb-5"> USER REGISTRATION FORM !</h1>
           <div class="form-group">
            <label for="exampleInputPassword1">Name :</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Enter your name" required>
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Email address :</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email"required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">password:</label>
            <input type="password" class="form-control" id="exampleInputEmail1" name="pass" aria-describedby="emailHelp" placeholder="Enter password"required>
          </div>
          <div class="row">
              <div class="col-sm-6">
          <div class="form-group">
            <label for="dob">DOB :</label>
            <input type="date" class="form-control" name="dob" id="dob" required>
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
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gen" id="gridRadios1" value="male" >
                  <label class="form-check-label" for="gridRadios1">
                    male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gen" id="gridRadios2" value="female">
                  <label class="form-check-label" for="gridRadios2">
                    female
                  </label>
                </div>
                <div class="form-check ">
                  <input class="form-check-input" type="radio" name="gen" id="gridRadios3" value="other" >
                  <label class="form-check-label" for="gridRadios3">
                    Other
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
            </div>


            <div class="col-sm-6">
              HEIGEST QULALIFACTATION
                <select name="highq" class="form-control">
                <option>--------CHOOSE---------</option> 
                <option>10TH</option> 
                <option>12TH</option> 
                <option>B.TEC</option> 
                <option>OTHER</option> 
                </select>


            </div>
<!-- start job and skil-->


<div class="col-sm-6">
    <div class="row">
        <div class="col-sm-12">
        <label for="Textarea">Job title</label>
        <textarea class="form-control " name="jobtitle" id="validationTextarea" placeholder="Enter your job title" required></textarea>
        
      </div>
    </div>

</div>
<div class="col-sm-6">
    <div class="row">
        <div class="col-sm-12">
        <label for="Textarea">Skills</label>
        <textarea class="form-control "  name="skills" id="validationTextarea" placeholder="Enter you skills " required></textarea>
        
      </div>
    </div>

</div>
<!-- end job and skil-->

<!--uploading start -->


<div class="col-sm-6 my-3">
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload photo</label>
    <input type="file" name="photo" class="form-control-file border " id="exampleFormControlFile1" required>
  </div>
  </div>

  <div class="col-sm-6 my-3 ">
  <div class="form-group ">
    <label for="exampleFormControlFile1">Upload CV</label>
    <input type="file" name="cv" class="form-control-file border " id="exampleFormControlFile1"required>
  </div>
  </div>

  




<!--uploading end -->


    <div class="col-sm-4"></div>
    <div class="col-sm-4">
<button type="submit" name="sub" class="btn btn-primary m-4  btn-lg"> <h4>submit</h4> </button>
</div>
<div class="col-sm-4"></div>







          
                
                
            
</div>     
            
</div>
               </div>
        </form>
        <div class="col-sm-3"></div>
    </div>
    <?php  include ('footer.php'); ?>
    
    </body>
</html> 