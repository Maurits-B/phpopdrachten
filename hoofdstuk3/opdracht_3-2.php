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
            $countryName = "België";
            $CurrentAge = 17;

            echo "Je woont in " . $countryName . " en je bent " . $CurrentAge . " jaar oud."
            ?>
        </p>
        <p>
            <?php

                if ($countryName == "belgië")
                {
                    if ($CurrentAge < 16)
                    {
                        echo "Je mag hier niet drinken";
                    }
                    elseif ($CurrentAge >= 16)
                    {
                        echo "je mag hier laag alcoholpromilage drinken";
                    }
                    elseif ($CurrentAge >= 18)
                    {
                        echo "je mag hier alles drinken";
                    }
                }
                elseif($countryName == "Bulgarije")
                {
                    if ($CurrentAge < 18)
                    {
                        echo "Je mag hier niet drinken";
                    }
                    elseif ($CurrentAge >= 18)
                    {
                        echo "je mag hier alles drinken";
                    }

                }
                elseif ($countryName == "Cyprus")
                {
                    if ($CurrentAge < 17)
                    {
                        echo "Je mag hier niet drinken";
                    }
                    elseif ($CurrentAge >= 17)
                    {
                        echo "je mag hier alles drinken";
                    }
                }
                elseif ($countryName == "Nederland")
                {
                    if ($CurrentAge < 18)
                    {
                        echo "Je mag hier niet drinken";
                    }
                    elseif ($CurrentAge >= 18)
                    {
                        echo "je mag hier alles drinken";
                    }
                }
                elseif ($countryName == "Zweden")
                {
                    if ($CurrentAge < 18)
                    {
                        echo "Je mag hier niet drinken";
                    }
                    elseif ($CurrentAge >= 18)
                    {
                        echo "je mag hier laag alcoholpromilage drinken";
                    }
                    elseif ($CurrentAge >= 20)
                    {
                        echo "je mag hier alles drinken";
                    }
                }
            ?>
        </p>
    </main>
    </body>
</html>
