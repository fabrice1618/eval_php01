<?php

function isVoyelle($lettre)
{
  $isVoyelle = false;

  if (is_string($lettre) && (strlen($lettre)==1) ) {
    // Je peux verifier si c'est une voyelle
    $lettre = strtoupper($lettre);
    if (
      ($lettre == 'A') ||
      ($lettre == 'E') ||
      ($lettre == 'I') ||
      ($lettre == 'O') ||
      ($lettre == 'U') ||
      ($lettre == 'Y')
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
