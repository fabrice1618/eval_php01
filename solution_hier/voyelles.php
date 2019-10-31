<?php
require_once("fonctions_voyelles.php");

echo "==================\n";
echo "Test isVoyelle\n";
echo "==================\n";
$lettre = 'a';
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = 'b';
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = 'c';
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = 'A';
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = 'E';
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = true;
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = false;
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = 0;
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = 1;
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = 2;
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

$lettre = 'bonjour';
echo "Lettre: " . $lettre . "=" . isVoyelle($lettre) . "\n";

echo "======================\n";
echo "Test supprimerVoyelles\n";
echo "======================\n";

$chaine_test = 'bonjour';
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 'hello world';
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 'eau';
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";


$chaine_test = 0;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 1;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 2;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 42;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = true;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = false;
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";
