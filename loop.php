<?php
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
foreach ($pronoms_personnels as $pronom) {
  echo $pronom;
  switch ($pronom) {
    case 'Je':
      echo 'code';
      break;
    case 'Tu':
      echo 'codes';
      break;
    case 'Il/Elle':
      echo 'codons';
      break;
    case 'Vous':
      echo 'codez';

    default:
      # code...
      break;
  }
  echo "<br>";
}

$i=1;
while ($i <121) {
  echo $i;
  echo "<br>";
  $i++;
}

for ($i=0; $i <121 ; $i++) {
  echo $i;
  echo "<br>";
}

$pays=["Belgique","France","Allemagne","Suisse","Italie","Pays-bas"];


$pays_assoc=["be"=>"Belgique","fr"=>"France","de"=>"Allemagne","ch"=>"Suisse","it"=>"Italie","nd"=>"Pays-bas"];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <?php
      for ($i=0; $i < count($pays)-1; $i++) {
        echo '<input type="checkbox" name="pays" value="'.$pays[$i].'">'.$pays[$i].'<br>';
      }

      echo "Pays-code :<br>";
      foreach ($pays_assoc as $key => $value) {
          echo '<input type="checkbox" name="pays" value="'.$key.'">'.$value.'<br>';
      }
       ?>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
