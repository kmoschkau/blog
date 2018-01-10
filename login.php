<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count > 0) {
         #session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: secret");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Header -->
   <?php include 'head.php'; ?>
  
  <body>

    <!-- Navigation -->
   <?php include 'navigation.php'; ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/secrets2.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Login</h1>
	      <span class="subheading">Places beyond your wildest dreams await.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Let the fun begin.</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form name="sentMessage" id="contactForm" action = "" method = "post" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Pseudonym" name="username" id="name" required data-validation-required-message="Don't forget this one, it's important.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" id="phone" required data-validation-required-message="Please enter a password.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
	    <br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="loginButton">Login</button>
	    </div>
	  </form>
	<br>
          <p>Don't have an account? Signup here!</p>
	  <form action="signup">	
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="signupButton">Signup</button>
	    </div>
	</form>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
   <?php include 'footer.php'; ?>


  </body>

</html>
