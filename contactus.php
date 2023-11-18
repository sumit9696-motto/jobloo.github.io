<?php  
if (isset($_POST['sub']))
{
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $message=$_POST['massage'];
    
    include ('connection.php');

    $query=" ";

    $res=mysqli_query($con,$query);


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
        <div class="container-fluid mt-2">
<!--start menu bar -->
<?php  include ('headermenu.php'); ?>

<!--end menu bar -->



<!-- start  contact form -->
<div class="container bg-light">

<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text"  id="name" name="name" class="form-control" placeholder=" enter your name" required>
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="number" id="contact" name="contact" class="form-control" placeholder=" enter your contact number" required>
                            <label for="contact" class="">Contact Number</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder=" enter your subject" required>
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control"placeholder=" enter your email" required>
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder=" enter your message" required></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            

            <div class="text-center text-md-left">
            <button type="submit" name="sub" class="btn btn-warning m-4  btn-lg" value="send"> <h4>SEND</h4> </button>

          <!--      <a class="btn btn-outline-warning btn-lg"  onclick="document.getElementById('contact-form').submit();">Send</a> -->
            </div>
            </form>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        

        <!--Grid column-->
        <div class="col-md-3 text-center border border-warning " style="background-color: white;">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-map-marker text-warning fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fa fa-phone text-warning mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fa fa-envelope text-warning mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
        </div>





<!-- end  contact form -->


<!-- stars  map -->
<div class="row">
    <div class="col-sm-12 ">
<div class="row">
    <div class="col-sm-12 text-center mt-5"><h3>Find Us On Google</h3> </div>
</div>
    </div>
</div>
<div class="container-fluid border border-dark my-5" > 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.1615098718503!2d80.96419201436547!3d26.89836886718431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39995785d5f7f1a5%3A0xffa47f1efe103f0d!2sTechpile%20Technology%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1607687521968!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>


<!-- end  map-->


<!-- start footer  -->
<?php  include ('footer.php'); ?>


</div>
    </body>
</html>