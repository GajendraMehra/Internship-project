<?php include 'db.php';
include 'header.php';

$jid=$_GET['jobid'];
$eid=$_GET['usrid'];
echo $jid;
$sql="INSERT INTO `apply`( `empid`, `jobid` ) VALUES ('$eid','$jid')";
$result_set=mysqli_query($cn,$sql); ?>
 <div class="container1">
 <div class="customcardlogin card text-center " style="width: 22rem;" style="">
     <div class="card-header success-color white-text">
      Successfully applied.
     </div>
     <div class="card-body">
         <h4 class="card-title">Thanks for applying</h4>
         <p class="card-text">You will be notify soon.</p>
         <a href="welcome.php?disable=<?php echo $jid ?>" class="btn btn-success btn-sm">Browe more</a>
     </div>

 </div>
 </div>
