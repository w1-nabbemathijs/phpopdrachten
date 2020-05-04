<?php
/**
 * User: Mathijs Nabbe
 * Date: 04-05-2020
 * Time: 12:49
 * File: checklogin.php
 */
?>
<?php

$authUsers = Array
(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);

foreach ($users as $username => $password)
{
    if ($_POST[ 'username' ] == $username && $_POST[ 'password' ] == $password) {
        session_start();
        $_SESSION[ 'username' ] = $_POST[ 'username' ];
        header('location: welkom.php');
    } else {
        $message = "Ongeldige username/wachtwoord
        {$_POST['username']}, probeer het nog eens.";
        include "opdracht6.1.php";
    }
}