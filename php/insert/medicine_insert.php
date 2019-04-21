<?php
  include_once '../dbh.php';

  $medcode = $_POST['medcode'];
  $name = $_POST['name'];
  $disease = $_POST['disease'];
  $quan = $_POST['quan'];
  $cost = $_POST['cost'];
  $sql = "INSERT INTO medicine(Med_Code, Med_Name, Disease, Quantity, Cost) VALUES ('$medcode', '$name', '$disease', '$quan', '$cost');";
  $result = mysqli_query($conn, $sql);

header("Location: ../../insert/medicine_insert.html?signup=success");

?>
