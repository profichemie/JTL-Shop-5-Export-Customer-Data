<?php

use JTL\Shop;

require_once("../includes/globalinclude.php");
require_once("./xt.php");

$xtea = new XT("INSERT_BLOWFISH_KEY");

$q = "SELECT * FROM tkunde";

echo "cPasswort;cAnrede;cTitel;cVorname;cNachname;cFirma;cStrasse;cHausnummer;cAdressZusatz;cPLZ;cOrt;cBundesland;cLand;cTel;cMobil;cFax;cMail;cUSTID;cWWW;fGuthaben;cNewsletter;dGeburtstag;fRabatt;cHerkunft;dErstellt;cAktiv;cKundenNr;cZusatz". PHP_EOL;

$ergebnis = Shop::Container()->getDB()->executeQuery($q,2);
$echo = "";

foreach ($ergebnis as $e) {

    $echo .= "\"" . "" . "\"" . ";";//$e->cPasswort
    $echo .= "\"" . $e->kKundengruppe . "\"" . ";";
    $echo .= "\"" . $e->cAnrede . "\"" . ";";
    $echo .= "\"" . $e->cTitel . "\"" . ";";
    $echo .= "\"" . $e->cVorname . "\"" . ";";
    $echo .= "\"" . $xtea->Decrypt($e->cNachname) . "\"" . ";";
    $echo .= "\"" . $xtea->Decrypt($e->cFirma) . "\"" . ";";
    $echo .= "\"" . $xtea->Decrypt($e->cStrasse) . "\"" . ";";
    $echo .= "\"" . $e->cHausnummer . "\"" . ";";
    $echo .= "\"" . $e->cAdressZusatz . "\"" . ";";
    $echo .= "\"" . $e->cPLZ . "\"" . ";";
    $echo .= "\"" . $e->cOrt . "\"" . ";";
    $echo .= "\"" . $e->cBundesland . "\"" . ";";
    $echo .= "\"" . $e->cLand . "\"" . ";";
    $echo .= "\"" . $e->cTel . "\"" . ";";
    $echo .= "\"" . $e->cMobil . "\"" . ";";
    $echo .= "\"" . $e->cFax . "\"" . ";";
    $echo .= "\"" . $e->cMail . "\"" . ";";
    $echo .= "\"" . $e->cUSTID . "\"" . ";";
    $echo .= "\"" . $e->cWWW . "\"" . ";";
    $echo .= "\"" . $e->fGuthaben . "\"" . ";";
    $echo .= "\"" . $e->cNewsletter . "\"" . ";";
    $echo .= "\"" . $e->dGeburtstag . "\"" . ";";
    $echo .= "\"" . $e->fRabatt . "\"" . ";";
    $echo .= "\"" . $e->cHerkunft . "\"" . ";";
    $echo .= "\"" . $e->dErstellt . "\"" . ";";
    $echo .= "\"" . $e->cAktiv . "\"" . ";";
    $echo .= "\"" . $e->cKundenNr . "\"" . ";";
    $echo .= "\"" . $xtea->Decrypt($e->cZusatz) . "\"";
    $echo .= PHP_EOL;
}

echo nl2br($echo);

?>
