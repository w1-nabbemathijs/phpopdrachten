<?php
/**
 * User: Mathijs Nabbe
 * Date: 22-03-2020
 * Time: 16:32
 * File: form_data.php
 */
?>
<?php include "../../../Includes/header.php"; ?>
<h1>Registratieformulier</h1>
<hr>
<table style="text-align: left;">
    <tr>
        <th>Naam:</th>
        <td>
            <?php
            $naam = $_GET["naam"];
            if ($naam == null)
            {
                echo "<p style='color: red'>U heeft geen naam ingevuld</p>";
            }
            else
            {
                echo $naam;
            }
            ?>
        </td>
    </tr>
    <tr>
        <th>Geslacht</th>
        <td>
            <?php
            $geslacht = $_GET["geslacht"];
            if ($geslacht == "M")
            {
                echo "Man";
            }
            if ($geslacht == "V")
            {
                echo "Vrouw";
            }
            else
            {
                echo "<p style='color: red'>U heeft geen geslacht ingevuld</p>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <th>Leeftijdscategorie</th>
        <td>
            <?php
            $leeftijdscategorie = $_GET["leeftijdscategorie"];
            if ($leeftijdscategorie == "-1")
            {
                echo "<p style='color: red'>U heeft geen leeftijd ingevuld</p>";
            }
            if ($leeftijdscategorie == "1")
            {
                echo "18";
            }
            if ($leeftijdscategorie == "2")
            {
                echo "18 - 25";
            }
            if ($leeftijdscategorie == "3")
            {
                echo "26 - 40";
            }
            if ($leeftijdscategorie == "4")
            {
                echo "41+";
            }
            ?>
        </td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>
            <?php
            $email = $_GET["email"];
            if ($email == null)
            {
                echo "<p style='color: red'>U heeft geen email ingevuld</p>";
            }
            else
            {
                echo $email;
            }
            ?>
        </td>
    </tr>
</table>
<?php include "../../../Includes/footer.php"; ?>
