<?php include ("control/session.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>auth</title>
    <meta charset="UTF-8">
  </head>
<body>
Welcome: <?php echo $_SESSION["user"]; ?> | <a href="logout.php">logout</a>
<h1>Autenticated</h1>
</body>
</html>