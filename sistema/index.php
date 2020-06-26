<?php 

session_start();
if($_SESSION['rol'] != 1)
{
  header("location: ../");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <?php include "includes/scripts.php" ?>
    <title>Sistema</title>
  </head>
  <body>

  <?php include "includes/header.php" ?>




 
  <?php include "includes/footer.php" ?>
   </body>
</html>