<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
?>

<!DOCTYPE html>

<html>
    <head>
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../CSS\style.css">
        <title>
            index
        </title>
        <style>
            span
            {
                font-weight: bold;
            }
        </style>
    </head>
    <body>

    <header>
        <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>

    <aside>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="..\hoofdstuk2\opdracht_2-1.php">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="..\hoofdstuk2\opdracht_2-2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 3
                <ul>
                    <li>
                        <a href="../hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 4
                <ul>
                    <li>
                        <a href="../hoofdstuk4/opdracht_4-1.php">Opdracht 4.1</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk4/opdracht_4-2.php">Opdracht 4.2</a>
                    </li>
                </ul>
            </li>
            <li>Hoofdstuk 5
                <ul>
                    <li>
                        <a href="../hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                    </li>
                    <li>
                        <a href="../hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
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
