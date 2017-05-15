<?php
  session_start();
  if (!$_SESSION["autenticated"]) {
    header("Location: logout.php");
  }
?>