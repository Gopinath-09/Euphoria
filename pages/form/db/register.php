<?php

include('conn.php');

$name=$_POST['par_name'];
$regno=$_POST['par_regno'];
$college=$_POST['par_college'];
$city=$_POST['par_city'];
$email=$_POST['par_email'];
$phno=$_POST['par_phno'];
$dep=$_POST['par_department'];
$gender=$_POST['par_gender'];
$year=$_POST['par_year'];
$noofevents=$_POST['noofevents'];

$se1r3=$_POST['se1'];
$se2r3=$_POST['se2'];
$se3r3=$_POST['se3'];

$se1r5=$_POST['se1r5'];
$se2r5=$_POST['se2r5'];
$se3r5=$_POST['se3r5'];
$se4r5=$_POST['se4r5'];
$se5r5=$_POST['se5r5'];


$se1= $se1r3.$se1r5;
$se2= $se2r3.$se2r5;
$se3= $se3r3.$se3r5;
$se4= $se4r5;
$se5= $se5r5;


  //after checking if user exists

$execute_user_exists=mysqli_query($conn,"select * from regform where (regno='$regno')");

if(mysqli_num_rows($execute_user_exists) > 0){

  $exists_row=mysqli_fetch_assoc($execute_user_exists);

  if($regno == isset($exists_row['regno'])){

    echo "<h2>Sorry Your Register Rumber is already registered..!</h2> <br><br>";

    echo "Click here to <b>Register with another Register Number<b>"."&nbsp <a href='../registerform.php'><b>Register_Again</b></a>";

  }

  else{

    echo "";

  }

}

else{

  $sql_insert="insert into regform values ('$name','$regno','$college','$city','$email','$phno','$dep','$gender','$year','$noofevents','$se1','$se2','$se3','$se4','$se5')";

  $execute_insert=mysqli_query($conn,$sql_insert);

  if($execute_insert){


    ?>
<form method="post" action="pay.php" name="payfrom" id="payform">
  <input type="hidden" name="regno" value="<?php $regno ?>">
  <input type="hidden" name="name" value="<?php $name ?>">
  <input type="hidden" name="email" value="<?php $email ?>">
  <input type="hidden" name="phno" value="<?php $phno ?>">
  <input type="hidden" name="noofevents" value="<?php $noofevents ?>">
  <script>this.payform.submit();</script>
</form>
    <?php
    //echo "Your Form Registered successfully!";
    //header('location: ../paymentupload/paymentupload.php');
    //echo "Click here to view Events and Details of schools"."&nbsp <a href='../../../index.html'>Signin</a>";

  }

  else{

    echo "registeration failed";

  }

}


?>