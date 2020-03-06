<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
$title = "INVULLEN";
include "../includes/header.php";
include "../includes/menu.php";
?>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <?php
            $event = "Elfstedentocht";
            $event2 = "Alvestêdetocht";
            $distance = 200;
            $sport = "Schaatstocht";
            $type = "natuurijs";
            $comunity = "Koninklijke Vereniging De Friese Elf Steden";
            $city = "Leeuwarden";
            $province = "Friesland";
            $times = 15;
            $year = 1909;
            $keer = 1;
            $verhaal = "De $event (Fries: $event2) is een $distance kilometer
                        lange schaatstocht over $type die wordt georganiseerd door
                        de $comunity. $city,
                        de hoofdstad van $province, is start- en aankomstplaats. De
                        $event is inmiddels $times maal verreden en werd voor het
                        eerst in $year gereden en wordt maximaal $keer keer per winter
                        gehouden.";

            $verhaal2 = "De " . $event . "(Fries: " . $event2 . ") is een " . $distance . " kilometer
                        lange schaatstocht over " . $type . "ie wordt georganiseerd door
                        de " . $comunity . ". " . $city . ",
                        de hoofdstad van " . $province . ", is start- en aankomstplaats. De
                        " . $event . " is inmiddels " . $times . " maal verreden en werd voor het
                        eerst in " . $year . " gereden en wordt maximaal " . $keer . " keer per winter
                        gehouden.";
        ?>
        <p>
            <?php
                echo $verhaal;
            ?>
        </p>
        <p>
            <?php
                echo $verhaal2;
            ?>
        </p>
    </main>
    </body>
</html>
