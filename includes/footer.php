<?php
session_start();
if (isset($_SESSION['username']))
{
    $bezoeker = $_SESSION['username'] . "&nbsp;<a href='/phpopdrachten/hoofdstuk6/loguit.php'> Loguit </a>";
}
else
{
    $bezoeker = "onbekende bezoeker". "&nbsp;<a href='/phpopdrachten/hoofdstuk6/opdracht61.php'>Login</a>";
}
//print vervolgens ook de $bezoeker zodat je de volgende visuele weergave in de pagina ziet

?>

 <footer>
        <?php
        if ($uur >= 0 && $uur <= 5) {
            echo "Goedenacht";
        }
        elseif ($uur >= 6 && $uur <= 11) {
            echo "goedemorgen";
        }
        elseif ($uur >= 12 && $uur <= 17) {
            echo "goedemiddag";
        }
        elseif ($uur >= 18 && $uur <= 24) {
            echo "goedeavond";
        }

        $year = date("Y");
            $name = "Maurits Bakker";
            //echo $name . "&copy" . $year;
            echo $task1 . " " . $bezoeker . "&copy" . $year;
        ?>
        </footer>
    </body>
</html>
