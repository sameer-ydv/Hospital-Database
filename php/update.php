<?php 
  include_once 'dbh.php';
  $query = $_POST['query'];
  $sql = $query;
  $result = mysqli_query($conn, $sql);

  header("Location: ../update/update.html?update=success");
?>
