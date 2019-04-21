<?php
  include_once 'dbh.php';
  $query = $_POST['query'];
  $sql = $query;
  $result = mysqli_query($conn, $sql);

  header("Location: ../delete/delete.html?update=success");
?>
