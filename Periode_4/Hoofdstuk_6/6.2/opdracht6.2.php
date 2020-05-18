<?php
/**
 * User: Mathijs Nabbe
 * Date: 05-05-2020
 * Time: 17:32
 * File: opdracht6.2.php
 */
?>
<?php include "../../../Includes/header.php"; ?>
    <h1>Steen, papier, schaar.</h1>
    <hr>
    <form id="gameFrm" method="get" action="opdracht6.2.php">
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                  value="steen"><img src="steen.png">
        </div>
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                  value="papier"><img src="papier.png">
        </div>
        <div class="float"><input type="radio"
                                  onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                  value="schaar"><img src="schaar.png">
        </div>
    </form>
    <hr>
    <h3>Uitslag:</h3>
    <?php
        session_start();
        //users aanmaken

        if (isset($_SESSION['user1']) == false) {
            $_SESSION[ 'user1' ] = 0;
            $_SESSION[ 'user2' ] = 0;
        }

        if (isset($_GET['keuze']))
        {
            //keuze ophalen
            $playerChoice = $_GET['keuze'];

            //jouw keuze weergeven
            echo "Jij koos: <img src='{$_GET['keuze']}.png'><br>";

            //Wat kiest de computer
            //Random wordt er een getal tussen 0 en 2 gekozen
            $opties = array("steen","papier","schaar");
            $computerkeuzegetal = rand(0,2);
            $computerkeuze = $opties[$computerkeuzegetal];
            echo "&nbsp;&nbsp;De computer koos: <img src='{$computerkeuze}.png'><br><br>";

            /*
            * gelijke keuzes wint niemand
            * schaar wint van papier
            * schaar verliest van steen
            * steen wint van schaar
            * steen verliest van papier
            * papier wint van steen
            * papier verliest schaar
            *
            * user1 = player
            * user2 = computer
            */

            $message = "";
            //gelijke keuze wint niemand
            if ($playerChoice == $computerkeuze)
            {
                $message = "<h1 style='background-color: yellow; color: black'>gelijkspel, maak een nieuwe keuze.</h1>";
            }

            //schaar wint van papier
            if ($playerChoice == "schaar" and $computerkeuze == "papier")
            {
                $_SESSION['user1'] +=1;
                $message = "<h1 style='background-color: green; color: white'>Je hebt deze ronde gewonnen!</h1>";
            }

            //schaar verliest van steen
            if ($playerChoice == "schaar" and $computerkeuze == "steen")
            {
                $_SESSION['user2'] +=1;
                $message = "<h1 style='background-color: red; color: white'>Je hebt deze ronde verloren.</h1>";
            }

            //steen wint van schaar
            if ($playerChoice == "steen" and $computerkeuze == "schaar")
            {
                $_SESSION['user1'] +=1;
                $message = "<h1 style='background-color: green; color: white'>Je hebt deze ronde gewonnen!</h1>";
            }

            //steen verliest van papier
            if ($playerChoice == "steen" and $computerkeuze == "papier")
            {
                $_SESSION['user2'] +=1;
                $message = "<h1 style='background-color: red; color: white'>Je hebt deze ronde verloren.</h1>";
            }

            //papier wint van steen
            if ($playerChoice == "papier" and $computerkeuze == "steen")
            {
                $_SESSION['user1'] +=1;
                $message = "<h1 style='background-color: green; color: white'>Je hebt deze ronde gewonnen!</h1>";
            }

            //papier verliest schaar
            if ($playerChoice == "papier" and $computerkeuze == "schaar")
            {
                $_SESSION['user2'] +=1;
                $message = "<h1 style='background-color: red; color: white'>Je hebt deze ronde verloren.</h1>";
            }

            //laten zien van scores en $message
            echo "<h1>$message</h1>";
            echo "<h1>Jouw score: {$_SESSION['user1']}</h1>";
            echo "<h1>Computer: {$_SESSION['user2']}</h1><br>";

            //winnaar bepalen
            if($_SESSION['user1'] == 5 or $_SESSION['user2'] == 5)
            {
                $winnaar = "";
                if($_SESSION['user1'] == 5)
                {
                    $winnaar = "<h1 style='background-color: green; color: white'>Gefeliciteert, je hebt gewonnen</h1>";
                }
                if($_SESSION['user2'] == 5)
                {
                    $winnaar = "<h1 style='background-color: red; color: white'>Helaas, de computer heeft je verslagen</h1>";
                }

                echo "$winnaar<br>";
                echo "<h1 style='background-color: black; color: white'>Maak een nieuwe keuze om een nieuw spel te starten</h1>";

                //session_destroy();
                unset($_SESSION['user1']);
            }
        }
    ?>
<?php include "../../../Includes/footer.php"; ?>
