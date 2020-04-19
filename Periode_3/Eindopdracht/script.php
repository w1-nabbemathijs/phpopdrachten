<?php
/**
 * User: Mathijs Nabbe
 * Date: 18-04-2020
 * Time: 15:14
 * File: script.php
 */
?>

<?php
//Opstellen css-class van divs
$div2Status = "hidden";

//Associatieve array met inloggegevens
$users = array
(
    "MathijsNabbe"      =>  "Nabbe01!",
    "Willem"            =>  "A876B4",
    "JanDeGroot"        =>  "BoscheBol",
    "JantjeJumbo"       =>  "Croissant1904",
    "RensNibbits"       =>  "RensNabbe06",
    "FlinFlanFloris"    =>  "Bollie1000",
    "BuurmanMol"        =>  "NaarBuiten64",
    "MeergranenKoek"    =>  "Mueslireep",
    "Bart"              =>  "Chimes",
    "PimHens"           =>  "Keukenbeurt420"
);

//Ophalen ingevoerde waardes
$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

//Controleren of ingevulde waardes in array staan
foreach ($users as $username => $password)
{
    if ($inputUsername == $username and $inputPassword == $password)
    {
        $message = "";
        $div1Status = "hidden";
        $div2Status = "visible";
    }
    else
    {
        $message = "Username en/of password incorrect";
    }
}

//Valideren ingevoerde waardes
if ($inputUsername == "" or $inputPassword == "")
{
    $message = "Een veld is niet ingevuld";
}
?>