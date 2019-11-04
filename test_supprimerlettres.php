<?php

require_once("superfonctions.php");

echo supprimerLettres("bonjour", "0123") . "\n\n";
echo supprimerLettres("bonjour", "eau") . "\n\n";
echo supprimerLettres("bonjour", "hlwrd") . "\n\n";

echo supprimerLettres("hello world", "0123") . "\n\n";
echo supprimerLettres("hello world", "eau") . "\n\n";
echo supprimerLettres("hello world", "hlwrd") . "\n\n";

echo supprimerLettres("eau", "0123") . "\n\n";
echo supprimerLettres("eau", "eau") . "\n\n";
echo supprimerLettres("eau", "hlwrd") . "\n\n";

echo supprimerLettres(0, "0123");
echo supprimerLettres(0, "eau");
echo supprimerLettres(0, "hlwrd");

echo supprimerLettres(1, "0123");
echo supprimerLettres(1, "eau");
echo supprimerLettres(1, "hlwrd");

echo supprimerLettres(2, "0123");
echo supprimerLettres(2, "eau");
echo supprimerLettres(2, "hlwrd");

echo supprimerLettres(42, "0123");
echo supprimerLettres(42, "eau");
echo supprimerLettres(42, "hlwrd");

echo supprimerLettres(true, "0123");
echo supprimerLettres(true, "eau");
echo supprimerLettres(true, "hlwrd");

echo supprimerLettres(false, "0123");
echo supprimerLettres(false, "eau");
echo supprimerLettres(false, "hlwrd");
