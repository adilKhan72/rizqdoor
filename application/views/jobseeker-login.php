<?php require("header.php");?><!--php required header-->
<div class="main-div jobcategory"><!--country category start-->
  <div class="main-login">
    <h1 class="country " style="padding-bottom:20px; ">Log In</h1>
    <p class="afterheading">Don't have an account?
     <a href="sign-up.php">Register here!</a></p>
     <div class="formdiv">
       <?php echo form_open('jobseeker/loginsubmit');
            
             $email = array(
        'name'          => 'email',
        'id'            => 'fname',
        'placeholder'         => 'Your Email'
            );

          echo form_input($email);

           $password = array(
        'name'          => 'password',
        'id'            => 'lname',
        'placeholder'         => 'Your Passowrd'
            );

          echo form_password($password);
       ?>



<label class="container">Keep me Logged In!
<?php  echo form_checkbox('keeplogin', 'accept', TRUE); ?>
<!--  Would produce <input type="checkbox" name="newsletter" value="accept" checked="checked" /> -->

  <span class="checkmark"></span>
  <span class="frgtpass"><a href="<?= base_url('jobseeker/forgotpassjobseeker'); ?> ">Forgot password?</a></span>
</label>

      <?php echo form_submit(['name'=>'login', 'value'=>'Login']); ?>
<!-- Would produce:  <input type="submit" name="mysubmit" value="Submit Post!" /> -->

      <p style="font-weight: 600; font-size: 1.3em; text-align: center;color: #05386b; padding-bottom: 15px;">OR</p>

      <div class="social-login"><a class="soc-href" href=""><i class="customico-facebook"></i>Login with Facebook</a></div>

      <div class="social-login"><a  class="soc-href" href="" style="background-color: rgb(0,119,181);"><i class="customico-linkedin"></i>Login with LinkediIn</a></div>
      <p class="formendtxt">
        RizqDoor.com never shares any of your activities through Facebook or Google without your explicit permission.
      </p>
      <p class="formendtxt" style="color:#05386b; font-weight: 500;">
        * This option takes effect only for job seekers.
      </p>
    </form>
  </div>
  </div>
</div>
<?php require("footer.php");?><!--php required footer-->
