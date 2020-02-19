<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
include "../includes/header.php";
include "../includes/menu.php";
?>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <p>
            <?php

                $trafficLightColor = "Groen";
                $ambulanceComming = true;
                $driveOn = true;

                //bepaald of je mag door rijden
                if ($ambulanceComming == true || $trafficLightColor != "Groen")
                {
                    $driveOn = false;
                }
                else
                {
                    $driveOn = true;
                }
                //geeft bericht weer dat je mag door rijden
                if ($driveOn == true)
                {
                    echo "U mag door rijden";
                }
                else
                {
                    echo "U moet stoppen";
                }
            ?>
        </p>
        <p>
            <?php
                $countryName = "";
                $CurrentAge = 17;

                if ($countryName == "belgië")
                {

                }
                elseif($countryName == "")
            ?>
        </p>
    </main>
    </body>
</html>
