<?php

function supprimerVoyelles($chaine)
{
  $chaine_retour = "";

  for($i=0; $i<strlen($chaine); $i++) {
    $lettre = $chaine[$i];
    
    if (!isVoyelle($lettre)) {
      $chaine_retour = $chaine_retour . $lettre;
    }
  }

  return($chaine_retour);
}

function isVoyelle($lettre)
{
  $voyelle = false;

  if (
    (is_string($lettre) == true ) &&
    (strlen($lettre)==1)
  ) {

    if (
    ($lettre == 'a') || ($lettre == 'A') ||
    ($lettre == 'e') || ($lettre == 'E') ||
    ($lettre == 'i') || ($lettre == 'I') ||
    ($lettre == 'o') || ($lettre == 'O') ||
    ($lettre == 'u') || ($lettre == 'U')
    ) {
    $voyelle = true;
    } else {
      $voyelle = false;
    }

  }

  return($voyelle);
}
