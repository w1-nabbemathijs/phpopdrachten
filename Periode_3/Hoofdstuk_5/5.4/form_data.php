<?php
/**
 * User: Mathijs Nabbe
 * Date: 12-04-2020
 * Time: 10:20
 * File: opdracht5.4.php
 */
?>

<?php include "../../../Includes/header.php"; ?>

<?php
//de action is hetzelfde script als het formulier, eerst testen of het formulier
//verzonden is

     echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
     //Een van de of beide radiobuttons is/zijn niet aangevinkt
     if (!isset($_POST['trafficLightColor']) || !isset($_POST['ambulance']))
     {
        echo "Niet alle opties zijn aangevinkt, en daarom kan er geen advies worden gegeven";
     }
     else
     {
         $trafficLightColor = $_GET['trafficLightColor'];
         $ambulanceComing = $_GET['ambulance'];

         echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een
        ambulance aan.";

         //Bepalen of je wel of niet mag doorrijden
         if ($trafficLightColor <> "groen" AND $ambulanceComing == 'niet')
         {
             echo "<div class='groen'>U mag doorrijden</div>";
         }
         else
         {
             echo " <div class='rood'>U moet stoppen</div>";
        }
     }

     echo "</div>";
 ?>

<?php include "../../../Includes/footer.php"; ?>
