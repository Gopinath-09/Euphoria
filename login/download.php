<?php
$server_hostname = "localhost"; 

$database_name = "epiz_29912259_forex"; 

$username = "root";

$password = ""; 

$link_sqli = mysqli_connect($server_hostname, $username, $password, $database_name);

if (!$link_sqli) {
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging error #: " . mysqli_connect_errno() . PHP_EOL;
echo "Error description: " . mysqli_connect_error() . PHP_EOL;
exit;
}
else{
  echo "connected";
}



$adminid = $_POST['id'];
$pass = $_POST['pass'];
$Not_Paid_List= $_POST['download'];
include './admindetails.php';

if($adminid == $acc_id && $pass == $acc_pass){

$TableName = "regform"; 

$Filename = $Not_Paid_List; 
$Output = "";
$strSQL = "SELECT * FROM $TableName";
$sql = mysqli_query($link_sqli, $strSQL); 
if (mysqli_error($link_sqli)) { 
echo mysqli_error($link_sqli);
} else {
$columns_total = mysqli_num_fields($sql);

for ($i = 0; $i < $columns_total; $i++) {
  $Heading = mysqli_fetch_field_direct($sql, $i);
  $Output .= '"' . $Heading->name . '",';
}
$Output .= "\n";		
while ($row = mysqli_fetch_array($sql)) {
  for ($i = 0; $i < $columns_total; $i++) {
     $Output .= '"' . $row["$i"] . '",';
  }
  $Output .= "\n";
}
$TimeNow = date("YmdHis");
$Filename .= $TimeNow . ".csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename=' . $Filename);
echo $Output;
}
exit;
}
else{
  echo "Admin ID: $adminid and Password: $pass is wrong.. <br><br> Enter the correct Admin Details..! <b>Click here to:  </b> <a href='./login.html'>Login Again</a>";
}
?>