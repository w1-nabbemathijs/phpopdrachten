        </div>
        <br>
        <br>
        <a href="../../../index.php">Terug naar index.php</a>
        <footer style="background-color: black; color: white;">
            <?php include "variabelen.php"; ?>
            <p><?php echo "$name,  jaar $year, uur $hour" ?></p>
            <p>
                <?php
                if ($hour < "5")
                {
                    echo "Goedennacht";
                }
                if ($hour > "5" and $hour < "12")
                {
                    echo "Goedenochtend";
                }
                if ($hour > "12" and $hour < "17")
                {
                    echo "Goedenmiddag";
                }
                if ($hour > "17" and $hour < "24")
                {
                    echo "Goedenavond";
                }
                ?>
            </p>
        </footer>
    </body>
</html>