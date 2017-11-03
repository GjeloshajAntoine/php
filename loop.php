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
}
 ?>
