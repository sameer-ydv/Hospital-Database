<?php
  include_once '../dbh.php';

  $roomno = $_POST['roomno'];
  $staffid = $_POST['staffid'];
  $dept = $_POST['dept'];
  $nopat = $_POST['nopat'];
  $sql = "INSERT INTO room(Room_No, Room_Staff_Id, Department, No_of_Patients) VALUES ('$roomno', '$staffid', '$dept', '$nopat');";
  $result = mysqli_query($conn, $sql);

header("Location: ../../insert/room_insert.html?signup=success");

?>
