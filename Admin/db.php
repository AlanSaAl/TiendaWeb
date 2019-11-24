<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'tiendaweb'
) or die(mysqli_erro($mysqli));

?>
