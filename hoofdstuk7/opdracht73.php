<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
$title = 'OPDRACHTNAAM';
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php


    // Inladen functies bestand
    include("functions.php");

    // Starten van een database connectie
    startConnection();

    // Executeren van een SQL query
    $query = "SELECT * FROM joke";
    $jokes = executeQuery($query);

    echo "<p> $query </p>";

    // Resultaten rij voor rij ophalen
    while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
    {
        echo $row["jokedate"] .  $row["joketext"] . $row["jokeclou"] . "<br>";
    }

    ?>
</main>
<?php
include  "../includes/footer.php";
?>
