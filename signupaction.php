<?php include_once 'db.php';
include'header.php';
if(isset($_POST['btn-upload']))
{

    $user_name=$_POST['name'];
    $user_phone=$_POST['phoneNumber'];
    $user_dob=$_POST['DateofBirth'];
    $user_email=$_POST['email'];
    $user_password=$_POST['password'];
    $user_confirmpassword=$_POST['confirm_password'];
    $user_category=$_POST['cat'];
    if ($user_password!=$user_confirmpassword) {
  ?>
  <div class="container1">
      <div class="card" id="dispaly_message">
        <div class="card-header danger-color white-text">Warning &nbsp!</div>
        <div class="card-body">
            <h4 class="card-title">Sign up Again.
            <br>

            <p class="card-text">Password do not match <br>Already have account <a href="login.php">Log In</a></p>
            <a class="btn btn-deep-orange" href="./signup.php">Sign Up</a>
        </div>
      </div>
    </div>
  <?php
    }
    else {
      if($user_category=="student")
      {
          $ac=mysqli_query($cn,"SELECT email from users where email='$user_email'");
      }
      else {
            $ac=mysqli_query($cn,"SELECT email from employer where email='$user_email'");
      }
    $kkl=mysqli_num_rows($ac);
    if($kkl>0)
    {
      ?>
      <div class="container1">
          <div class="card" id="dispaly_message">
            <div class="card-header danger-color white-text">Warning &nbsp!</div>
            <div class="card-body">
                <h4 class="card-title">Sign up with different email.
                <br>
              <?php echo "$user_email already exist in $user_category category. Try different category."?></h4>
                <p class="card-text">Already have account in users<a href="login.php">Log In</a></p>
                <a class="btn btn-deep-orange" href="./signup.php">Sign Up</a>
            </div>
          </div>
        </div>

<?php
    }
    else{
      if ($user_category=="Employer") {
        $sql="INSERT INTO employer( name, phone, dob, email, password) VALUES('$user_name','$user_phone','$user_dob','$user_email','$user_password')";
        mysqli_query($cn,$sql);
        // code...
      }
      else{
      $sql="INSERT INTO users( name, phone, dob, email, password, category) VALUES('$user_name','$user_phone','$user_dob','$user_email','$user_password','$user_category')";
      mysqli_query($cn,$sql);
      }
      ?>
      <div class="container1">
          <div class="card" id="dispaly_message">
            <div class="card-header danger-color white-text">Warning &nbsp!</div>
            <div class="card-body">
                <h4 class="card-title">Successfully Registered.
                <br>
              Thanks for Registering with us</h4>
                <p class="card-text">Now Login to your Account</p>
                <a class="btn btn-deep-orange" href="./login.php">Log in</a>
            </div>
          </div>
        </div>

      <?php
    }
}
}
else {
  ?>
<div class="container1">
    <div class="card" id="dispaly_message">
      <div class="card-header danger-color white-text">Error &nbsp!</div>
      <div class="card-body">
          <h4 class="card-title">Sign up before redirecting.</h4>
          <p class="card-text">Already have account <a href="login.php">Log In</a></p>
          <a class="btn btn-deep-orange" href="./signup.php">Sign Up</a>
      </div>
    </div>
  </div>

<?php }
 ?>
