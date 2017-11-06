<?php
$emile="emile";
$emile_maj=ucfirst($emile);
echo $emile;
echo "<br>";
echo $emile_maj;
echo "<br>";
echo date("Y");
echo "<br>";
echo date("l jS F Y h:i:s A");

function plus($a,$b)
{
  if (!is_numeric($a) || !is_numeric($b)) {
    return "erreur:argument non numérique";
  }else {
    return $a+$b;
  }

}

function initiales_de($mots)
{
  $initiales="";
  $was_a_space=true;
  $mots=str_split($mots);
  for ($i=0; $i < count($mots)-1 ; $i++) {
    if ($mots[$i]==" ") {
      $was_a_space=true;//si il ya un espace , s'en rappeler pour savoir quand commence le mot suivant
    }else {
      if ($was_a_space) {//si le lettre précedente était un espace mais que celle-ci est un caractére alors nouveau mot et stocker 1ere lettre
        $initiales=$initiales.strtoupper($mots[$i]);
      }else {

      }
      $was_a_space=false;
    }
  }
  return $initiales;
}
echo "<br>";
echo initiales_de("In code we trust!");
 ?>
