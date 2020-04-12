<?php
/**
 * User: Mathijs Nabbe
 * Date: 12-04-2020
 * Time: 10:20
 * File: opdracht5.4.php
 */
?>

<?php include "../../../Includes/header.php"; ?>
<form action="form_data.php">
    <h3>Komt er een ambulance aan? </h3>
    <input type="radio" id="ambulanceComing" name="ambulance" value="wel">
    <label for="ambulanceComing">Ja</label>
    <input type="radio" id="ambulanceNotComing" name="ambulance" value="niet">
    <label for="ambulanceNotComing">Nee</label>

    <h3>Kleur van het stoplicht?</h3>
    <input type="radio" id="red" name="trafficLightColor" value="rood">
    <label for="red">Rood</label>
    <input type="radio" id="orange" name="trafficLightColor" value="oranje">
    <label for="orange">Oranje</label>
    <input type="radio" id="green" name="trafficLightColor" value="groen">
    <label for="green">Groen</label><br><br>

    <input type="submit">
</form>
<?php include "../../../Includes/footer.php"; ?>
