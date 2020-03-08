</div>
        <footer>
            <?php include "variabelen.php"; ?>
            <a href="../../../index.php">Terug naar index.php</a>
            <p><?php echo "$name $year $hour" ?></p>
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