<?php
  include_once '../dbh.php';

  $docid = $_POST['docid'];
  $name = $_POST['name'];
  $qual = $_POST['qual'];
  $exp = $_POST['exp'];
  $pcode = $_POST['pcode'];
  $sql = "INSERT INTO doctor(Doc_Id, Doc_Name, Qualification, Experience, Doc_P_Code) VALUES ('$docid', '$name', '$qual', '$exp', '$pcode');";
  $result = mysqli_query($conn, $sql);

header("Location: ../../insert/doctor_insert.html?signup=success");

?>
