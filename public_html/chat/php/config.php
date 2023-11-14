<?php
$hostname = "localhost";
$username = "id21008133_root";
$password = "Emm@1987";
$dbname = "id21008133_proyecto";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Database connection error" . mysqli_connect_error();
}
