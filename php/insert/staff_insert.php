<?php
  include_once '../dbh.php';

  $staffid = $_POST['staffid'];
  $name = $_POST['name'];
  $docid = $_POST['docid'];
  $pcode = $_POST['pcode'];
  $sql = "INSERT INTO staff(Staff_Id, Staff_Name, Staff_Doc_Id, Staff_P_Code) VALUES ('$staffid', '$name', '$docid', '$pcode');";
  $result = mysqli_query($conn, $sql);

header("Location: ../../insert/staff_insert.html?signup=success");

?>
