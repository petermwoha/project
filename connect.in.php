<?php

$conn_error = 'Could not connect to database !!';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$my_db = 'customers';

if (mysqli_connect ($mysql_host,$mysql_user,$mysql_pass) || mysqli_select_db ($my_db))
{
  die ($conn_error);
}
?>