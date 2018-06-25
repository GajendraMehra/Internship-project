<?php include_once 'db.php';

if(isset($_POST['btn-upload']))
{
  session_start();

$login_email=$_POST['email'];
$login_password=$_POST['password'];
$login_cat=$_POST['cat'];


if ($login_cat=="Student") {
  $mm=mysqli_query($cn,"select email,password from users where email='$login_email' AND password='$login_password'");
  $_SESSION['category']="users";
  $_SESSION['id']=$row['id'];

}
else
 if ($login_cat=="Employer") {
  $mm=mysqli_query($cn,"select email,password from employer where email='$login_email' AND password='$login_password'");
  $_SESSION['category']=$login_cat;


  // code...
}

  $a=mysqli_num_rows($mm);
  if($a>0)
  {
  	$_SESSION['username']=$login_email;


  header('location:welcome.php');

  	}
  	else
  	{
  		header('location:index.php?succes');

  	}
    }
