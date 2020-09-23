<body style="text-align: center; background-color: black;">
<style>

    h1.page_title {
        color: white;
        font-size: 50px;
        margin: 50px;
        font-family: Arial;
    }

    strong.coers {
        color: #d4ff00;
    }

    table {
        border-collapse: collapse;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    th, td {
        border: 1px solid white;
        color: white;
        width: 10vw;
        height: 5vw;
        font-family: Arial;
    }

    th {
        font-size: 30px;
    }

    .borderless_cell {
        border: none;
    }

    p.table_message {
        font-weight: bold;
        width: 100%;
        height: 100%;
        vertical-align: middle;
        color: black;
        padding-top: 2vw;
        font-family: Arial;
    }

    h2.domain_checker {
        color: white;
        font-family: Arial;
    }

    div.linkerhelft {
        display: inline-block;
        width: 59vw;
    }

    div.rechterhelft {
        display: inline-block;
        width: 39vw;
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    footer>img {
        width: 25%;
        height: auto;
        margin-bottom: 50px;
    }

    a.drive_link {
        color: white;
        font-weight: bold;
        font-size: 25px;
        margin-top: 150px;
        padding: 15px;
        border: solid 2px #d4ff00;
        text-decoration: none;
    }

    a.drive_link:hover {
        color: black;
        background-color: #d4ff00;
    }

</style>
<div class="linkerhelft">
    <h1 class="page_title"><strong class="coers">COERS</strong> Server Checker:</h1>
    <form action="" method="post">
        <input type="submit" name="submit_server" value="Refresh server status" />
    </form>
    <div>
        <?php

        //ping servers
        $host_server11="81.18.160.88"; /*server 11 oud*/
        $output_server11=shell_exec('ping -c 1 '.$host_server11);
        if (strpos($output_server11, 'Unreachable') !== false) {
            $server11status="<p class='table_message' style='background-color: red;'>Offline</p>";
        }
        elseif(strpos($output_server11, 'expired') !== false)
        {
            $server11status="<p class='table_message' style='background-color: orange;'>Timeout</p>";
        }
        elseif(strpos($output_server11, 'data') !== false)
        {
            $server11status="<p class='table_message' style='background-color: #D4FF00;'>Online</p>";
        }
        else
        {
            $server11status="<p class='table_message' style='background-color: white;'>Unknown Error</p>";
        }

        $host_server10="81.18.160.86"; /*Server 10*/
        $output_server10=shell_exec('ping -c 1 '.$host_server10);
        if (strpos($output_server10, 'Unreachable') !== false) {
            $server10status="<p class='table_message' style='background-color: red;'>Offline</p>";
        }
        elseif(strpos($output_server10, 'expired') !== false)
        {
            $server10status="<p class='table_message' style='background-color: orange;'>Timeout</p>";
        }
        elseif(strpos($output_server10, 'data') !== false)
        {
            $server10status="<p class='table_message' style='background-color: #D4FF00;'>Online</p>";
        }
        else
        {
            $server10status="<p class='table_message' style='background-color: white;'>Unknown Error</p>";
        }

        $host_server17="81.18.160.110"; /*Server 17*/
        $output_server17=shell_exec('ping -c 1 '.$host_server17);
        if (strpos($output_server17, 'Unreachable') !== false) {
            $server17status="<p class='table_message' style='background-color: red;'>Offline</p>";
        }
        elseif(strpos($output_server17, 'expired') !== false)
        {
            $server17status="<p class='table_message' style='background-color: orange;'>Timeout</p>";
        }
        elseif(strpos($output_server17, 'data') !== false)
        {
            $server17status="<p class='table_message' style='background-color: #D4FF00;'>Online</p>";
        }
        else
        {
            $server17status="<p class='table_message' style='background-color: white;'>Unknown Error</p>";
        }

        $host_server14="81.18.160.131"; /*Server 14*/
        $output_server14=shell_exec('ping -c 1 '.$host_server14);
        if (strpos($output_server14, 'Unreachable') !== false) {
            $server14status="<p class='table_message' style='background-color: red;'>Offline</p>";
        }
        elseif(strpos($output_server14, 'expired') !== false)
        {
            $server14status="<p class='table_message' style='background-color: orange;'>Timeout</p>";
        }
        elseif(strpos($output_server14, 'data') !== false)
        {
            $server14status="<p class='table_message' style='background-color: #D4FF00;'>Online</p>";
        }
        else
        {
            $server14status="<p class='table_message' style='background-color: white;'>Unknown Error</p>";
        }

        $host_coers11="81.18.160.154"; /*Server 11 Nieuw*/
        $output_coers11=shell_exec('ping -c 1 '.$host_coers11);

        if (strpos($output_coers11, 'Unreachable') !== false) {
            $coers11status="<p class='table_message' style='background-color: red;'>Offline</p>";
        }
        elseif(strpos($output_coers11, 'expired') !== false)
        {
            $coers11status="<p class='table_message' style='background-color: orange;'>Timeout</p>";
        }
        elseif(strpos($output_coers11, 'data') !== false)
        {
            $coers11status="<p class='table_message' style='background-color: #D4FF00;'>Online</p>";
        }
        else
        {
            $coers11status="<p class='table_message' style='background-color: white;'>Unknown Error</p>";
        }

        // Display results
        echo '
                <table>
                    <tr>
                        <th>Server 11</th>
                        <th>Server 10</th>
                        <th>Server 17</th>
                        <th>Server 14</th>
                        <th>Coers 11</th>
                    </tr>
                    <tr>
                        <td>
                            '.$server11status.'
                        </td>
                        <td>
                            '.$server10status.'
                        </td>
                        <td>
                            '.$server17status.'
                        </td>
                        <td>
                            '.$server14status.'
                        </td>
                        <td>
                            '.$coers11status.'
                        </td>
                    </tr>
                </table>
                ';
        ?>
    </div>
</div>

<div class="rechterhelft">
    <h1 class="page_title"><strong class="coers">COERS</strong> Domain Checker:</h1>
    <form action="" method="post">
        <input type="text" name="hostname" placeholder="Ping adres" />
        <input type="submit" name="submit_domain" value="Controleer domein" />
    </form>
    <div>
        <?php
        // controleer formulierwaarde
        if ( isset( $_POST['submit_domain'] ) ) {

            // verander ingevulde waarde in variabele
            $hostname = $_REQUEST['hostname'];

            // haal hostname door ping-command
            $ip = gethostbyname($hostname);

            // zoek naar server-ip en aanmaken links
            if ($ip == "81.18.160.88"){
                $server = "server 11";
            }
            elseif ($ip == "81.18.160.86"){
                $server = "server 10";
            }
            elseif ($ip == "81.18.160.110"){
                $server = "server 17";
            }
            elseif ($ip == "81.18.160.131"){
                $server = "server 14";
            }
            elseif ($ip == "81.18.160.154"){
                $server = "coers 11";
            }
            else {
                $server = "Niet bij COERS";
            }

            // aanmaken links
            $drive_link ='https://drive.google.com/drive/search?q='.$hostname.'';


            // Display results
            echo '
                <table>
                    <tr>
                        <th>Domain:</th>
                        <td>'.$hostname.'</td>
                    </tr>
                    <tr>
                        <th>IP:</th>
                        <td>'.$ip.'</td>
                    </tr>
                    <tr>
                        <th>Server:</th>
                        <td>'.$server.'</td>
                    </tr>
                    <tr class="borderless_cell">
                        <td colspan="2" class="borderless_cell">
                            <a class="drive_link" target="_blank" href="'.$drive_link.'">Google-Drive Tonen</a>
                        </td>
                    </tr>
                </table>
                ';
        }
        ?>
    </div>
</div>

<footer>
    <img src="https://shop.coers.cc/theechag/2019/07/Logo.coers_fluo-fluo.png" alt="footer_logo">
</footer>
</body>