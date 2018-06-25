<?php include 'db.php';

$em= $_SESSION['username'];
$sql="SELECT * FROM JOBS ";
$result_set=mysqli_query($cn,$sql);
$sqwl="SELECT * FROM users where email ='$em' ";
$res_set=mysqli_query($cn,$sqwl);
while($row=mysqli_fetch_array($res_set))
{
  $uid= $row['id'];
}

?>
<div class="container">
<div class="row">
<?php
while($row=mysqli_fetch_array($result_set))
{ $bid=$row['id'];?>


  <div class="col-md-3">
  <div class="card ">
    <div class="card-header text-center success-color white-text">
      <?php echo $row['post'] ?>
    </div>
    <div class="card-body tex-left">
        <h6 class="" >Company :  <span class="job_detail"><?php echo $row['cname'] ?></span> </h6>
        <h6 class="">Job Location :  <span class="job_detail"><?php echo $row['location'] ?></span></h6>
        <h6 class="">Stipened :  <span class="job_detail"><?php echo $row['pay'] ?> / month</span></h6>
        <h6 class="">Duration :  <span class="job_detail"><?php echo $row['duration'] ?> Months</span></h6>
        <h6 class="">Start Date :  <span class="job_detail"><?php echo $row['startdate'] ?></span></h6>
      <div class="text-center">

      <a href="apply.php?jobid=<?php echo $row['id']?>&usrid=<?php echo $uid;?>" id="ahref<?php echo $bid ?>" ><button type="button" id="bd<?php echo $bid ?>" class="btn btn-success  btn-sm" name="apply_button" >Apply</button></a>
      </div>
    </div>
    <div class="card-footer ">

        <div class="mb-0">Posted Date : <?php
    echo $row['posteddate'];  ?></div>
    <div class="mb-0"> Last Date : <span class="text-danger"> <?php
echo $row['lastdate'];  ?></span></div>
    </div>
  </div>
</div>

<?php }
$sq="SELECT * FROM JOBS INNER JOIN apply ON JOBS.ID = apply.jobid WHERE apply.empid='$uid' ";
$res_set=mysqli_query($cn,$sq);
while($row=mysqli_fetch_array($res_set))
{
  ?>
  <script type="text/javascript">
var el = document.getElementById('bd<?php echo $row['jobid'] ?>');
var em = document.getElementById('ahref<?php echo $row['jobid'] ?>');
el.classList.remove("btn-success");
el.classList.add("btn-danger");
el.innerHTML="Applied";
em.classList.add('disabled');



  </script>
  <?php

}



 ?>
</div>
</div>
