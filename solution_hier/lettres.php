<?php
require_once("fonctions_lettres.php");

echo "==================\n";
echo "Test supprimerLettres\n";
echo "==================\n";

$chaine_test = 'bonjour';
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, '0123') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'eau') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'hlwrd') . "\n";


$chaine_test = 'hello world';
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, '0123') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'eau') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'hlwrd') . "\n";

$chaine_test = 'eau';
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, '0123') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'eau') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'hlwrd') . "\n";

$chaine_test = 0;
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, '0123') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'eau') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'hlwrd') . "\n";

$chaine_test = 1;
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, '0123') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'eau') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'hlwrd') . "\n";

$chaine_test = 2;
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, '0123') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'eau') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'hlwrd') . "\n";

$chaine_test = true;
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, '0123') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'eau') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'hlwrd') . "\n";

$chaine_test = false;
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, '0123') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'eau') . "\n";
echo "Chaine: " . $chaine_test . "=" . supprimerLettres($chaine_test, 'hlwrd') . "\n";


echo "==================\n";
echo "Test supprimerVoyelles\n";
echo "==================\n";

$chaine_test = 'bonjour';
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";


$chaine_test = 'hello world';
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";

$chaine_test = 'eau';
echo "Chaine: " . $chaine_test . "=" . supprimerVoyelles($chaine_test) . "\n";
