<?php
/**
 * User: Maurits Bakker
 * Date: 4-3-2020
 * Time: 1:40 PM
 * File: opdracht_4-3.php
 */
$title = 'Opdracht 4.4';
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <h2>Weekkalender komende week:</h2>
    <?php
    include "4.4/script.php";
    echo $task1;
    ?>
</main>
<?php
include  "../includes/footer.php";
?>
