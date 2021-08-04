<?php

$HOST = 'mysql';
$USER = 'root';
$PASS = 'root';
$DB = 'api_dev';

$conn = new mysqli($HOST, $USER, $PASS, $DB);

if ($conn->connect_error) {
  echo 'Connection failed ' . $conn->connect_error;
} else {
  echo 'Successfully connected to database: "' . $DB . '" via MySQL';
}

echo "<br>";

$APACHE_VER = apache_get_version();
if ($APACHE_VER) {
  echo 'Apache version: "' . $APACHE_VER . '"';
} else {
  echo 'Failed to get Apache version.';
}

?>
