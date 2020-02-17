<?php
    /**
     * User: Mathijs Nabbe
     * Date: 17-02-2020
     * Time: 14:41 PM
     * File: opdracht3.2.php
     */
?>
<?php
    $trafficLightColor = "groen";
    $ambulanceComing = false;
    $driveOn = false;

    $countryName = "Nederland";
    $currentAge = 18;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title><?php print "opdracht 3.2"; ?></title>
    </head>
    <body>
        <p>
            <?php
                if($trafficLightColor == "groen" and $ambulanceComing == false)
                {
                    $driveOn = true;
                }
                else
                {
                   $driveOn = false;
                }

                if($driveOn == true)
                {
                    echo "<span style='color: green'>U mag doorrijden</span>";
                }
                if($driveOn == false)
                {
                    echo "<span style='color: red'>U moet stoppen</span>";
                }
            ?>
        </p>
        <p>
            <?php echo "Je woont in $countryName en bent $currentAge jaar oud"; ?>
        </p>
        <p>
            <?php
                if($countryName == "Belgie")
                {
                    if($currentAge >= 16 and $currentAge <18)
                    {
                        echo "Je mag hier zwakke alcohol drinken";
                    }
                    if($currentAge >= 18)
                    {
                        echo "Je mag hier alle drank drinken";
                    }
                    if($currentAge < 16)
                    {
                        echo "Je mag hier geen alcohol drinken";
                    }
                }
                if($countryName == "Bulgarije")
                {
                    if($currentAge >= 18)
                    {
                        echo "Je mag hier alle drank drinken";
                    }
                    if($currentAge < 18)
                    {
                        echo "Je mag hier geen alcohol drinken";
                    }
                }
                if($countryName == "Cyprus")
                {
                    if($currentAge >= 17)
                    {
                        echo "Je mag hier alle drank drinken";
                    }
                    if($currentAge < 17)
                    {
                        echo "Je mag hier geen alcohol drinken";
                    }
                }
                if($countryName == "Nederland")
                {
                    if($currentAge >= 18)
                    {
                        echo "Je mag hier alle drank drinken";
                    }
                    if($currentAge < 18)
                    {
                        echo "Je mag hier geen alcohol drinken";
                    }
                }
                if($countryName == "Zweden")
                {
                    if($currentAge >= 18 and $currentAge <20)
                    {
                        echo "Je mag hier zwakke alcohol drinken";
                    }
                    if($currentAge >= 20)
                    {
                        echo "Je mag hier alle drank drinken";
                    }
                    if($currentAge < 18)
                    {
                        echo "Je mag hier geen alcohol drinken";
                    }
                }
            ?>
        </p>
        <a href="../../../index.php">Terug naar index.php</a>
    </body>
</html>
