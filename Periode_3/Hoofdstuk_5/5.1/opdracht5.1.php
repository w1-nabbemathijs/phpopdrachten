<?php
/**
 * User: Mathijs Nabbe
 * Date: 22-03-2020
 * Time: 16:32
 * File: opdracht5.1.php
 */
?>

<?php include "../../../Includes/header.php"; ?>
<h1>Restaria Kees Kroket</h1>
<p>
    Visstraat 12<br>
    5211 DN 's-Hertogenbosch<br>
    073 613 6720<br>
    info@restariakeeskroket.nl<br>
</p>
<form action="form_data.php">
    <label>
        <p>Bedrijfsnaam</p>
        <input name="companyName" type="text">
    </label>
    <label>
        <p>Voornaam</p>
        <input name="name1" type="text">
    </label>
    <label>
        <p>Achternaam</p>
        <input name="name2" type="text">
    </label>
    <label>
        <p>Telefoon</p>
        <input name="phoneNumber" type="number">
    </label>
    <label>
        <p>E-mail</p>
        <input name="mailAdress" type="email">
    </label>
    <label>
        <p>Bericht</p>
        <input name="message" type="text">
    </label>
    <br><br>
    <input type="submit" name="submit" value="verzend">
</form>
<?php include "../../../Includes/footer.php"; ?>