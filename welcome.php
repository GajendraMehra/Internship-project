<?php
include 'usersession.php';
include 'header.php';
 if (isset($_SESSION['username'])) {
 if ($_SESSION['category']=="users") {
   ?>
   <!--Jumbotron for user -->
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card card-image" style= "background-image: url(https://www.crystalcropprotection.com/images/internship.jpg);
        background-repeat: no-repeat;
        background-size: cover; ">
            <div class="text-white text-center rgba-stylish-strong py-5 px-4">
                <div class="py-5">

                    <!--Content-->
                        <h6 class="orange-text font-bold"><i class="fa fa-camera-retro"></i> Photography</h6>
                        <h2 class="card-title pt-3 mb-5 font-bold">Welcome <?php echo $_SESSION['username']; ?></h2>
                        <p class="px-5 pb-4">Go Ahead and get an internship from top companies. 
                            fugiat, laboriosa</p>
                          <a href="logout.php"> <button type="button" class="btn btn-danger"><i class="fa fa-google-plus left"></i> Logout</button></a>

                    <!--Content-->

                </div>
            </div>
        </div>
    </div>
</div>
<!--Jumbotron-->
   <?php
 }
 elseif ($_SESSION['category']=="Employer") {
   echo "Emplorer";
 }

 ?>
 <a href="logout.php">Logout</a>
<?php
}
else{
  header('location:login.php');
} ?>
