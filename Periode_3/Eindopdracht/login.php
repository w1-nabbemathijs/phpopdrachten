<?php
/**
 * User: Mathijs Nabbe
 * Date: 18-04-2020
 * Time: 15:14
 * File: login.php
 */
?>
<?php include "../../Includes/header.php"; ?>
<?php include "../Eindopdracht/script.php"; ?>
<h1>Bergheen</h1>
<div class="<?php echo $div1Status ?>">
        <p>Login om onze adresgegevens + openingstijden te zien</p>
        <p id="message"><?php echo $message; ?></p>
        <form method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username"><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="username"><br>
            <input type="submit" name="verzend" value="verzend">
        </form>
    </div>
    <div class="<?php echo $div2Status ?>">
        <p>Welkom!</p>
        <table>
            <tr>
                <th>Openingstijden</th>
                <th>Adresgegevens</th>
            </tr>
            <tr>
                <td>Do: 22:00</td>
                <td>Am Wriezener Bahnhof</td>
            </tr>
            <tr>
                <td>Vr: All day</td>
                <td>10243 Berlin</td>
            </tr>
            <tr>
                <td>Za: All day</td>
                <td>Duitsland</td>
            </tr>
            <tr>
                <td>Zo: 12:00</td>
                <td></td>
            </tr>
        </table>
        <p>Deze gegevens dien je ten alle tijden geheim te houden!</p>
    </div>
<?php include "../../Includes/footer.php"; ?>
