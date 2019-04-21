<?php
  include_once '../dbh.php';

  $pcode = $_POST['pcode'];
  $aadhar = $_POST['aadhar'];
  $name = $_POST['name'];
  $disease = $_POST['disease'];
  $status = $_POST['status'];
  $sql = "INSERT INTO patient(P_Code, Aadhar_No, P_Name, Suffering_From, Status) VALUES ('$pcode', '$aadhar', '$name', '$disease', '$status');";
  $result = mysqli_query($conn, $sql);

header("Location: ../../insert/patient_insert.html?signup=success");

?>
