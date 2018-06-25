<?php include_once 'db.php';

if(isset($_POST['btn-upload']))
{
  session_start();
   $emp_id=$_SESSION['username'];
    $job_position=$_POST['position'];
    $job_company=$_POST['cname'];
    $job_location=$_POST['location'];
    $job_date=$_POST['sdate'];
    $job_duration=$_POST['duration'];
    $job_paypermonth=$_POST['paypermonth'];
    $job_lastdate=$_POST['ldate'];
    $sql="SELECT id FROM employer WHERE email= '$emp_id'";
    $yu=mysqli_query($cn,$sql);
    while($row=mysqli_fetch_array($yu))
    {
    $eid= $row['id'];

    }
    $job_posted= date("d/m/y");
    $sq="INSERT INTO `jobs`( `empid`, `post`, `cname`, `location`, `startdate`, `duration`, `pay`, `posteddate`, `lastdate`) VALUES ('$eid','$job_position','$job_company','$job_location','$job_date','$job_duration','$job_paypermonth','$job_posted','$job_lastdate')";
    mysqli_query($cn,$sq);
    ?>
    <script>
    window.location.href='welcome.php?success';

    </script>

    <?php
}
?>
