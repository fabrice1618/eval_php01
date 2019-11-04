<?php

function supprimerLettres($chaine, $lettres_a_supprimer)
{
  $chaine_retour = "";

  if (is_string($chaine) && is_string($lettres_a_supprimer)) {

    for($i=0;$i<strlen($chaine);$i++) {
      echo "Lettre : " . $chaine[$i];
      $lettreAControler = $chaine[$i];

      if (isLettreASupprimer($lettreAControler, $lettres_a_supprimer)==false) {
        $chaine_retour = $chaine_retour . $chaine[$i];
      }

      echo "\n";
    }


  } else {
    echo "\n";
    var_dump($chaine);
    var_dump($lettres_a_supprimer);
    echo "parametre erroné\n";
  }

  return($chaine_retour);
}

function isLettreASupprimer($lettre, $lettres_a_supprimer)
{
  $supprimer_lettre = false;

  if (
    is_string($lettre) &&
    (strlen($lettre)==1) &&
    is_string($lettres_a_supprimer) &&
    (strlen($lettres_a_supprimer)>=1)
  ) {


    //Les parametres sont OK
    for($i=0; $i<strlen($lettres_a_supprimer); $i++) {
      $lettreAControler = $lettres_a_supprimer[$i];
//      echo "\nLettre a supprimer ? " . $lettreAControler . "\n";
      if ($lettreAControler == $lettre) {
        $supprimer_lettre = true;
      }
    }


  } else {
    var_dump($lettre);
    var_dump($lettres_a_supprimer);
    echo "paramètre erroné\n";
  }

  return($supprimer_lettre);
}


function isVoyelle($lettre)
{
  $isVoyelle = false;

  if (is_string($lettre) && (strlen($lettre)==1) ) {
    // Je peux verifier si c'est une voyelle
    $lettreMajuscule = strtoupper($lettre);
    if (
      ($lettreMajuscule == 'A') ||
      ($lettreMajuscule == 'E') ||
      ($lettreMajuscule == 'I') ||
      ($lettreMajuscule == 'O') ||
      ($lettreMajuscule == 'U') ||
      ($lettreMajuscule == 'Y')
    )
    $isVoyelle = true;

  } else {
    var_dump($lettre);
    echo "paramètre erroné\n";
  }

  return($isVoyelle);
}

function supprimerVoyelles($chaine)
{
  $chaine_retour = "";

  if (is_string($chaine)) {

    for($i=0;$i<strlen($chaine);$i++) {
      echo "Lettre : " . $chaine[$i];
      if (!isVoyelle($chaine[$i])) {
        $chaine_retour = $chaine_retour . $chaine[$i];
      }
      echo "\n";
    }


  } else {
    echo "\n";
    var_dump($chaine);
    echo "parametre erroné\n";
  }

  return($chaine_retour);
}

function testerLettre($lettre)
{
  if (isVoyelle($lettre) ) {
    echo "$lettre est une voyelle\n";
  } else {
    echo "$lettre n'est pas une voyelle\n";
  }

}
