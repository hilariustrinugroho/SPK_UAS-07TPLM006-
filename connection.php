<?php
  define('DB_NAME', 'susantokun_db_stemming');
  define('DB_USER', 'susantokun');
  define('DB_PASSWORD', 'susantokun');
  define('DB_HOST', 'localhost');
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
  if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
  }
  $db_selected = mysqli_select_db($conn, DB_NAME);
  if (!$db_selected) {
    die('Cannot access ' . DB_NAME . ': ' . mysqli_error($conn));
  }
?>