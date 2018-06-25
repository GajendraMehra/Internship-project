<?php include_once 'db.php';

if(isset($_POST['btn-upload']))
{
  session_start();
  {

$login_email=$_POST['email'];
$login_password=$_POST['password'];
$login_cat=$_POST['cat'];


if ($login_cat=="Student") {
echo "Stedent";

}
else
 if ($login_cat=="Employer") {
  echo "Employer";
}
}
