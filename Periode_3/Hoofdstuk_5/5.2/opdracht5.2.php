<?php
/**
 * User: Mathijs Nabbe
 * Date: 22-03-2020
 * Time: 16:57
 * File: opdracht5.2.php
 */
?>

<?php include "../../../Includes/header.php"; ?>
<h1>Uitschrijfformulier KW1C</h1>
<hr>
<form action="form_data.php">
    <table>
        <tr>
            <th>Voor en achternaam</th>
            <td>
                <label>
                    <input type="text" name="name">
                </label>
            </td>
        </tr>
        <tr>
            <th>Studentnummer</th>
            <td>
                <label>
                    <input type="number" name="studentNumber">
                </label>
            </td>
        </tr>
        <tr>
            <th>Datum van uitschrijving</th>
            <td>
                <label>
                    <input type="date" name="resignDate">
                </label>
            </td>
        </tr>
        <tr>
            <th>Reden van uitschijving</th>
            <td>
                <label>
                    <select name="resignReason">
                        <option value="Geen intresse">Verkeerde keuze</option>
                        <option value="Te moeilijk">Te hoog niveau</option>
                        <option value="Motivatiegebrek">Geen motivatie meer</option>
                        <option value="Anders">Anders</option>
                    </select>
                </label>
            </td>
        </tr>
        <tr>
            <th>Leerjaar</th>
            <td>
                <input type="radio" id="year1" name="schoolYear" value="1e leerjaar" checked>
                <label for="year1">1e leerjaar</label><br>
                <input type="radio" id="year2" name="schoolYear" value="2e leerjaar">
                <label for="year2">2e leerjaar</label><br>
                <input type="radio" id="year3" name="schoolYear" value="3e leerjaar">
                <label for="year3">3e leerjaar</label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="checkbox" id="succesClass" name="succesClass">
                <label for="succesClass">Ik wil me aanmeldden bij de succesklas</label><br>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="checkbox" id="deleteData" name="deleteData">
                <label for="deleteData">Verwijder mijn gegevens uit het systeem</label><br>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="message">Geef hieronder de reden van je uitschijving op</label><br>
                <input type="text" id="message" name="message" style="width: 300px; height: 100px;">
            </td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Versturen">
</form>
<hr>
<?php include "../../../Includes/footer.php"; ?>
