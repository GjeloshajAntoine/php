<?php
switch ($_GET["note"]) {
  case 0:
    echo "Ce travail est nul";
    break;
  case 1:
    echo "Ce travail est nul";
    break;
  case 2:
    echo "Ce travail est nul";
    break;
  case 3:
    echo "Ce travail est nul";
    break;
  case 4:
    echo "Ce travail est nul";
    break;
  case 5:
    echo "Ce travail n'est pas terrible";
    break;
  case 6:
    echo "Ce travail n'est pas terrible";
    break;
  case 7:
    echo "Ce travail n'est pas terrible";
    break;
  case 8:
    echo "Ce travail n'est pas terrible";
    break;
  case 9:
    echo "Ce travail n'est pas terrible";
    break;
  case 10:
    echo "Tout juste!";
    break;
  default:
    break;
}
 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="conditions.php" method="GET">
      <input type="number" name="note">
      <input type="submit"  value="Submit">
    </form>
  </body>
</html>
