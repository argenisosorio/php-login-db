<?php
  function connect_db() {
    $user = 'root'; // User of Mysql
    $host = 'localhost'; // Host for connect to Mysql
    $password = ''; // Password of Mysql
    $db = 'users'; // Database name
    $link = mysql_connect($host,$user,$password) or die ("No connection : " . mysql_error());
    mysql_select_db($db) or die ("No connection to db");
    return $link;
  }

  function database($query) {
    $result = mysql_query($query) or die ("Failed query;: " . mysql_error());
    return $result;
  }
?>