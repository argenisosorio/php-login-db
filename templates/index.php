<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8">
  </head>
<body>
<form name="autentication" action="control/control.php" method="post">
  <?php
    error_reporting(E_ALL ^ E_NOTICE);
    if ($_GET["error"]=="error-login") {
    }
    else {
      echo "";
    }
  ?>
  <p />
  <h1>Login</h1>
  Username: <input type="text" name="user"> <p />
  Password: <input type="password" name="pass"> <p />
  <p />
  <input type="submit" name="login" value="Login">
</form>
</body>
</html>