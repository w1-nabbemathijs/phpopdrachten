<?php
/**
 * User: Mathijs Nabbe
 * Date: 12-02-2020
 * Time: 11:39 AM
 * File: opdracht3.1.php
 */
?>
<?php
$naam = "Elfstedentocht";
$fries = "Alvestedetoch";
$afstand = 200;
$sport = "schaatstocht";
$ijs = "natuurijs";
$organisatie = "Koningklijke Vereniging De Friesche Elf Steden";
$stad = "Leeuwarden";
$land = "Friesland";
$aantalkeer = 15;
$jaartal = 1909;
$keerperwinter = 1;
$verhaal = "De $naam (Fries: $fries) is een $afstand kilometer lange $sport over $ijs die wordt georganiseerd door de $organisatie. $stad, de hoofdstad van $land, is start- en aankomstplaats. De $naam is inmiddels $aantalkeer maal verreden en werd voor het eerst in $jaartal en wordt maximaal $keerperwinter keer per winter gehouden.";
$verhaal2 = "De " . $naam . " (Fries: " . $fries . ") is een " . $afstand . " kilometer lange " . $sport . " over " . $ijs . " die wordt georganiseerd door de " . $organisatie . ". " . $stad . ", de hoofdstad van " . $land . ", is start- en aankomstplaats. De " . $naam . " is inmiddels " . $aantalkeer . " maal verreden en werd voor het eerst in " . $jaartal . " en wordt maximaal " . $keerperwinter . " keer per winter gehouden.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php print "Mathijs Nabbe"; ?></title>
</head>
<body>
<p><?php echo "$verhaal"; ?></p>
<p><?php echo "$verhaal2"; ?></p>
<a href="../../../index.php">Terug naar index.php</a>
</body>
</html>