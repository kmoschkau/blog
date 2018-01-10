<?php
  define('DB_SERVER', 'localhost');
  define('DV_USERNAME', 'pi');
  define('DB_PASSWORD', 'raspberry11');
  define('DB_DATABASE', 'accounts');
  # $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  $db = mysqli_connect('localhost', 'pi', 'raspberry11', 'accounts');
?>
