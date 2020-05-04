        </div>
        <br>
        <br>
        <hr>
        <a href="../../../index.php">Terug naar index.php</a>
        <footer>
            <?php

            include "variabelen.php";

            if ($hour < 5)
            {
                $begroeting = "Goedennacht";
            }
            if ($hour > "5" and $hour < "12")
            {
                $begroeting = "Goedenochtend";
            }
            if ($hour > "12" and $hour < "17")
            {
                $begroeting = "Goedenmiddag";
            }
            if ($hour > "17" and $hour < "24")
            {
                $begroeting = "Goedenavond";
            }
            else
            {
                $begroeting = "Welkom";
            }

            $bezoeker = "";
            session_start();
            if (isset($_SESSION['username']))
            {
                $bezoeker = $_SESSION['username']. ", &nbsp;<a href='../Periode_4/Hoofdstuk_6/6.1/loguit.php'>Loguit</a>";
            }
            else
            {
                $bezoeker = "onbekende bezoeker". ", &nbsp;<a href='../Periode_4/Hoofdstuk_6/6.1/opdracht6.1.php'>Login</a>";
            }
            ?>
            <p>
                <?php echo "$name,  jaar $year, uur $hour, $begroeting, $bezoeker" ?>
            </p>
        </footer>
        <hr>
    </body>
</html>