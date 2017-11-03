<?php

$chambre_est_sale=true;
if ($chambre_est_sale) {
  echo "Range ta chambre, on dirait la cage d'un bonobo!";
}else {
  echo  "Ta chambre est trop propre, vis un peu!";
}
$etat_chambre="en ordre";

if ($etat_chambre == "dégoutante") {
  echo "Non mais là , c'est exageré";
}elseif ($etat_chambre == "sale") {
  echo "beeerk";
}elseif ($etat_chambre == "en ordre") {
  echo "C'est enfin correct !";
}elseif ($etat_chambre == "maniaque") {
  echo "C'est trop parfait, quelqu'un a nettoyé à ta place !";
}else {
}
echo "<br>";


$heure=12;

if ($heure <= 5 && $heure >=9) {
  echo "bonjour";
}elseif ($heure > 9 && $heure <=12) {
  echo "Bonne journée!";
}elseif ($heure >12 && $heure <=16) {
  echo "Bonne après-midi";
}elseif ($heure >16 && $heure <=21) {
  echo "Bonne soirée!";
}elseif ($heure <21 &&  $heure < 5) {
  echo "Bonne nuit";
}

echo "<br>";

if ( $_GET["age"] < 12) {
  if ( $_GET["gender"] == "male") {
    echo "Salut petit";
    if ( $_GET["lg"] == "fr") {
      echo "Salut petit";
    }elseif ($_GET["lg"] == "en") {
      echo "Hello boy";
    }
  }elseif ($_GET["gender"] == "female") {
    if ( $_GET["lg"] == "fr") {
      echo "Salut petite";
    }elseif ($_GET["lg"] == "en") {
      echo "hello girl";
    }
  }
}elseif ($_GET["age"] >= 12 && $_GET["age"]<18 ) {
  if ( $_GET["gender"] == "male") {
    if ( $_GET["lg"] == "fr") {
      echo "Salut l'ado";
    }elseif ($_GET["lg"] == "en") {
      echo "Hello Teenage boy";
    }
  }elseif ($_GET["gender"] == "female") {
    if ( $_GET["lg"] == "fr") {
      echo "Salut l'adolescente";
    }elseif ($_GET["lg"] == "en") {
      echo "Hello Teenage girl";
    }
  }
}elseif ( $_GET["age"] >= 18 && $_GET["age"] <= 115) {
  if ( $_GET["gender"] == "male") {
    echo "salut l'adulte";
    if ( $_GET["lg"] == "fr") {
      echo "salut l'adulte";
    }elseif ($_GET["lg"] == "en") {
      echo "Hello Sir";
    }
  }elseif ($_GET["gender"] == "female") {
    if ( $_GET["lg"] == "fr") {
      echo "salut l'adulte";
    }elseif ($_GET["lg"] == "en") {
      echo "Hello Lady!";
    }
  }
}elseif ( $_GET["age"] >115) {
  if ( $_GET["gender"] == "male") {
    if ( $_GET["lg"] == "fr") {
      echo "Wow! Toujours vivant?";
    }elseif ($_GET["lg"] == "en") {
      echo "Wow! Still alive, old man?";
    }
  }elseif ($_GET["gender"] == "female") {
    if ( $_GET["lg"] == "fr") {
      echo "Wow! Toujours vivante?";
    }elseif ($_GET["lg"] == "en") {
      echo "Wow! Still alive, old lady?";
    }
  }
}

if ( $_GET["lg"] == "fr") {
  echo "francais";
}elseif ($_GET["lg"] == "en") {
  echo "en";
}

if ( $_GET["note"] <= 3) {
  echo "Ce travail est nul";
}elseif ($_GET["note"] <= 9) {
  echo "Ce travail n'est pas terrible";
}elseif ($_GET["note"] == 10) {
  echo "Tout juste!";
}elseif ($_GET["note"] > 10 && $_GET["note"]<15) {
  echo "C'est pas mal";
}elseif ($_GET["note"] >15 && $_GET["note"]>19) {
  echo "Bravo!";
}elseif ($_GET["note"] <18) {
  echo "Police! Arrêtez ce tricheur!";
}



if ($_GET["age"] <=21 && $_GET["age"] <=40 && $_GET["gender"] == "female") {
  echo "Bonjour, bienvenue parmi nous!";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>votre age :</p>
     <form action="conditions.php" method="GET">
      <input type="number" name="age">
      <input type="radio" name="gender" value="male" checked> Male
      <input type="radio" name="gender" value="female"> Female
      <input type="radio" name="lg" value="fr" checked> français
      <input type="radio" name="lg" value="en"> Anglais
      <input type="submit"  value="Submit">
    </form>
    <form action="conditions.php" method="GET">
      <input type="number" name="note">

    </form>
  </body>
</html>
