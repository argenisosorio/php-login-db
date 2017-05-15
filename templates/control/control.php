<?php
include "connection.php";
$link =connect_db();
$user = $_POST['user'];
$pass = $_POST['pass'];
$query = "SELECT * from auth where user = '$user' AND pass = '$pass'";
$result=database($query);
if ($row=mysql_fetch_array($result)) {
  session_start();
  $_SESSION["autenticated"] = true;
  $_SESSION["user"] = $user;
  header ("Location: ../autenticated.php");
}
else {
  header("Location: ../index.php?=error_login");
}
?>