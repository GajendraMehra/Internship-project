<?php include 'header.php';
include 'usersession.php';
include 'db.php';
$jobid=$_GET['jobid'];
$sno = 1;
?>
<div class="container" style="margin-top:5em">
  <div class="row">
    <!-- Table for displaying applicants-->
    <!--Table-->
    <p class="h4 text-center col-md-12 card-header primary-color white-text mb-4">Interested applicants. </p>

<table class="table text-center">

  <!--Table head-->
  <thead>
      <tr>
          <th>#</th>
          <th>Name</th>
          <th>Accept</th>
          <th>Decline</th>
      </tr>
  </thead>
  <!--Table body-->
  <tbody>
<?php

$sql="SELECT * FROM `apply` INNER JOIN users ON apply.empid= users.id WHERE jobid='$jobid'   ";
$result_set=mysqli_query($cn,$sql);
while($row=mysqli_fetch_array($result_set))
{?>  <!--Table head-->
        <tr>

            <th scope="row"><?php echo $sno?></th>
            <td><?php echo $row['name']; ?></td>
            <td></td>
            <td>@</td>
        </tr>

        <?php
      $sno++;
    }
        ?>

    </tbody>
    <!--Table body-->

</table>
<!--Table-->

    </div>

  </div>
