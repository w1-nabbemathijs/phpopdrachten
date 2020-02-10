<?php
/**
 * User: Mathijs Nabbe
 * Date: 10-02-2020
 * Time: 13:53 PM
 * File: opdracht2.2.php
 */
?>
<?php
$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch zo'n makkelijke taal";
$text4 = "wat is";
$text5 = "PHP";
$text6 = "Nooit gedacht dat";
$text7 = "De installatie is best ingewikkeld";
$text8 = "Fijn";
$text9 = "?";
$text10 = ".";
$text11 = ",";
$text12 = "<br>";
$text13 = "is";
$text14 = "Vind je niet";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php print "opdracht2.2"; ?></title>
</head>
<body>
<h1><?php echo "Taak 2"; ?></h1>
<p>
    <?php echo "$text1 $text4 $text5 toch $text2$text10 $text12
                $text7$text10 $text8 toch$text9 $text12
                $text6 $text5 $text3 $text13$text10"; ?>
</p>
<h1><?php echo "Taak 3"; ?></h1>
<p>
    <?php echo "$text1$text11$text12
                $text8 toch dat $text5 zo'n makkelijke taal $text13$text10$text12
                $text7$text10 $text14$text9"; ?>
</p>
</body>
</html>