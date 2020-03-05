<?php
/**
 * User: Maurits Bakker
 * Date: 2-3-2020
 * Time: 3:24 PM
 * File: opdracht_4-1.php
 */
$title = 'opdracht 4.1';
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    if ($uur >= 0 && $uur <= 5)
    {
        echo "Goedenacht";
    }
    elseif($uur >= 6 && $uur <= 11)
    {
        echo "goedemorgen";
    }
    elseif($uur >=12 && $uur <= 17)
    {
        echo "goedemiddag";
    }
    elseif($uur >=18 && $uur <= 24)
    {
        echo "goedeavond";
    }
    ?>
</main>
<?php
include "../includes/footer.php";
?>
