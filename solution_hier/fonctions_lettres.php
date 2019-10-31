<?php

function supprimerVoyelles($chaine)
{
  return(supprimerLettres($chaine, "aeiou"));
}

function supprimerLettres($chaine, $lettres_a_supprimer)
{
  $chaine_retour = "";

  for($i=0; $i<strlen($chaine); $i++) {
    $lettre = $chaine[$i];

    if (!isLettreASupprimer($lettre, $lettres_a_supprimer)) {
      $chaine_retour = $chaine_retour . $lettre;
    }
  }

  return($chaine_retour);
}


function isLettreASupprimer($lettre, $lettres_a_supprimer)
{
  $lettreAsupprimer = false;

  if (
    (is_string($lettres_a_supprimer) == true ) &&
    (is_string($lettre) == true ) &&
    (strlen($lettre)==1)
  ) {

    for($i=0;$i<strlen($lettres_a_supprimer);$i++) {
      $lettre_sup = $lettres_a_supprimer[$i];
      if ($lettre == $lettre_sup) {
        $lettreAsupprimer = true;
      }
    }

  }

  return($lettreAsupprimer);
}
