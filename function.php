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
echo initiales_de("Ceci est un test");
echo "<br>";

function remplace_ae($mot)
{
  $mot=str_split($mot);
  //$last_was_a=false;
  for ($i=0; $i <count($mot)-1 ; $i++) {
    if ($mot[$i] == "a") {
      if ($i <count($mot)) {//s'il reste une lettre après
        if ($mot[$i+1] == "e") {
          $mot[$i]="æ";
          //unset($mot[$i+1]);
          $mot[$i+1]="";
          $i++;
        }
      }
    }
  }

  return implode($mot);
}
echo remplace_ae("aeaeaeae");

function remplace_æ($mot)
{
  return str_replace("æ","ae",$mot);
}
echo "<br>";

echo str_replace("æ","ae","chænichthys");

function feedback($message,$classe="info")
{
  echo "<div class=\"{$classe}\"> {$message} </div>";
}
feedback("Ceci est une erreur","Warning");
feedback("Ceci est une erreur sans classe");

function word_generator($min,$max)
{
  $nbr_letter=rand($min,$max);
  $word_array=[];
  while ($nbr_letter >0) {
    $nbr_letter--;
    array_push($word_array,chr(rand(97,122)));
  }
  return implode($word_array);
}
echo "<br>  <br>";
echo "<a href=\"function.php\">recommencer</a>";
echo "<br>";
echo word_generator(1,5);
echo "<br>";
echo word_generator(7,15);
$en_minuscule=strtolower("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!");

function reverse_string($stringToReverse){
    $stringToReverse=str_split($stringToReverse);
    $reversed=[];
    for ($i=count($stringToReverse)-1; $i >=0 ; $i--) {
      array_push($reversed,$stringToReverse[$i]);
    }
    return implode($reversed);
}
echo reverse_string("truc");
echo "<br>  <br>";

$chanson="A
Bavas a ca ma sarpata a parda,
Ma la macha ma la macha
Bavas a ca ma sarpata a parda
Ma la macha a ravana.
";
$substitutions = array( 'E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
echo "<br>  <br>";
echo "<br>  <br>";

for ($i=0; $i <count($substitutions)-1 ; $i++) {
  echo str_replace("a",$substitutions[$i],$chanson);
  echo "<br>  <br>";

}
?>
