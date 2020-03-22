<?php
/**
 * User: Mathijs Nabbe
 * Date: 22-03-2020
 * Time: 16:32
 * File: form_data.php
 */
?>
<?php include "../../../Includes/header.php"; ?>
<table>
    <tr>
        <th>Bedrijfsnaam:</th>
        <td><?php echo $_GET["companyName"] ?></td>
    </tr>
    <tr>
        <th>Naam:</th>
        <td><?php echo $_GET["name1"] ?></td>
    </tr>
    <tr>
        <th>Achternaam:</th>
        <td><?php echo $_GET["name2"] ?></td>
    </tr>
    <tr>
        <th>Telefoon:</th>
        <td><?php echo $_GET["phoneNumber"] ?></td>
    </tr>
    <tr>
        <th>E-mail:</th>
        <td><?php echo $_GET["mailAdress"] ?></td>
    </tr>
    <tr>
        <th>Bericht:</th>
        <td><?php echo $_GET["message"] ?></td>
    </tr>
</table>
<?php include "../../../Includes/footer.php"; ?>
