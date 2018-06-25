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
   include 'jobs.php';
 }
 elseif ($_SESSION['category']=="Employer") {
?>
<div class="row container-fluid" style="margin-top:5em">
  <div class="col-md-12">
<div class="card">
 <div class="card-header deep-orange lighten-1 white-text text-center">Employer's Section </div>
 <div class="card-body" style="background:#e1e4e3 ;">
     <h4 class="card-title"></h4>
     <div class="row">
       <div class="col-md-4 " style="display:flex; flex-grow:5 ">
     <!-- Default form contact -->
<form method="post" action="jobaction.php">
    <p class="h4 text-center card-header success-color white-text mb-4">Post your jobs here.</p>

    <!-- Default input Post -->
    <label for="defaultFormContactNameEx" class="black-text">Post</label>
    <input type="text" id="post" name="position"   class="form-control" required>

    <br>

    <!-- Default input Company name -->
    <label for="defaultFormContactEmailEx" class="black-text">Company Name</label>
    <input type="text" id="cname" name="cname" class="form-control" required>

    <br>

    <!-- Default input Location -->
    <label for="defaultFormContactSubjectEx" class="black-text">Location</label>
    <input type="text" id="loc" name="location" class="form-control" required>

    <br>

    <!-- Default textarea message -->
    <label for="start" class="black-text">Starting from</label>
    <input type="date" id="startdate" name="sdate" class="form-control" required>

    <br>
    <!-- Default textarea message -->
    <label for="dur" class="black-text">Duration (in Months)</label>
    <input type="number" id="duration"name="duration" class="form-control" required>

    <br>
    <!-- Default textarea message -->
    <label for="pay" class="black-text">Pay per month</label>
    <input type="text" id="Paypermonth" name="paypermonth" class="form-control" required>

    <br>
    <!-- Default textarea message -->
    <label for="date" class="black-text">Last Date of Applying.</label>
    <input type="date" id="ldate" name="ldate" class="form-control" required>

    <br>

    <div class="text-center mt-4">
        <button class="btn btn-outline-warning" name="btn-upload" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
    </div>
</form>

</div>
<div class="col-md-8">
<div class="row">
  <div class="col-md-12 ">
  <p class="h4 text-center card-header success-color white-text mb-4">Jobs you have posted</p>
  </div>
</div>
<div class="row">
  <?php
  $em= $_SESSION['username'];
  $sqwl="SELECT * FROM employer where email ='$em' ";
  $res_set=mysqli_query($cn,$sqwl);
  while($row=mysqli_fetch_array($res_set))
  {
    $uid= $row['id'];
  }
  $sql="SELECT * FROM JOBS where empid ='$uid' ";
  $result_set=mysqli_query($cn,$sql);
  while($row=mysqli_fetch_array($result_set))
  {
 ?>
 <!--Row for posted jobs-->

   <div class="col-md-5 col-sm-5">
     <div class="card text-center" style="width: 22rem; margin: 1em">
       <h3 class="card-header primary-color white-text"><?php echo $row['post'] ?></h3>
       <div class="card-body text-left">
         <h6 class="" >Company :  <span class="job_detail"><?php echo $row['cname'] ?></span> </h6>
         <h6 class="">Job Location :  <span class="job_detail"><?php echo $row['location'] ?></span></h6>
         <h6 class="">Stipened :  <span class="job_detail"><?php echo $row['pay'] ?> / month</span></h6>
         <h6 class="">Duration :  <span class="job_detail"><?php echo $row['duration'] ?> Months</span></h6>
         <h6 class="">Start Date :  <span class="job_detail"><?php echo $row['startdate'] ?></span></h6>
       </div>
      <div class="card-footer text-left " style="display:flex">
          <a href="viewappliciant.php?jobid=<?php echo $row['id'] ?>" class="mb-0"><button class="btn btn-info btn-sm btn-rounded">View Application</button></p>
          <a href="deletejob.php?jobid=<?php echo $row['id'] ?>&uid=<?php echo $uid; ?>" class="mb-0"><button class="btn btn-danger btn-sm btn-rounded">Delete</button></p>
        </div>
    </div>
</div>
<?php }
 ?>


</div>

</div>
</div>
<!-- Default form contact -->
 </div>
   </div>
</div>
</div>
<?php
if(isset($_GET['success']))
{
  ?>
  <script type="text/javascript">
    alert('Job Posted Successfully');
        window.location.href='welcome.php';
  </script>
  <?php
}
 $current_date = date("d/m/y ");
   echo $current_date;
 }

 ?>
 <a href="logout.php">Logout</a>
<?php
}
else{
  header('location:login.php');
} ?>
