<?php
/**
 * User: Mathijs Nabbe
 * Date: 22-03-2020
 * Time: 16:32
 * File: form_data.php
 */
?>
<?php include "../../../Includes/header.php"; ?>
<h1>Uitschrijfformulier KW1C</h1>
<hr>
<table style="text-align: left;">
    <tr>
        <th>Voor en achternaam:</th>
        <td><?php echo $_GET["name"] ?></td>
    </tr>
    <tr>
        <th>Studentnummer</th>
        <td><?php echo $_GET["studentNumber"] ?></td>
    </tr>
    <tr>
        <th>Datum van uitschrijving:</th>
        <td><?php echo $_GET["resignDate"] ?></td>
    </tr>
    <tr>
        <th>Reden van uitschrijving:</th>
        <td><?php echo $_GET["resignReason"] ?></td>
    </tr>
    <tr>
        <th>Leerjaar:</th>
        <td><?php echo $_GET["schoolYear"] ?></td>
    </tr>
    <tr>
        <th>Aanmelden bij de succesklas:</th>
        <td>
            <?php
            $succesklas = $_GET["succesClass"];
            if ($succesklas == "on")
            {
                echo "JA";
            }
            else
            {
                echo "NEE";
            }
            ?>
        </td>
    </tr>
    <tr>
        <th>Verwijder gegevens:</th>
        <td>
            <?php
            $verwijderGegevens = $_GET["deleteData"];
            if ($verwijderGegevens == "on")
            {
                echo "JA";
            }
            else
            {
                echo "NEE";
            }
            ?>
        </td>
    </tr>
    <tr>
        <th>Reden van uitschrijving:</th>
        <td><?php echo $_GET["message"] ?></td>
    </tr>
</table>
<?php include "../../../Includes/footer.php"; ?>
