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

    //checking for get
    if (isset($_GET['search']))
    {
        $query = "SELECT * FROM joke WHERE joketext LIKE '%" . $_GET['search'] . "%'";
    }
    else{
        $query = "SELECT * FROM joke";
    }

    // Executeren van een SQL query
    $jokes = executeQuery($query);

    echo "<p> $query </p>";

    ?>
    <form action="opdracht73.php" method="get">
        <b>Zoekterm</b>
        <input type="text" name="search">
        <input type="submit" value="Zoeken">
    </form>
    <hr>
    <table>
        <tr>
            <th>Jokeid</th>
            <th>Joketext</th>
            <th>Jokeclou</th>
            <th>Jokedate</th>
        </tr>
        <?php
            // Resultaten rij voor rij ophalen
            while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
            {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["joketext"] . "</td><td>" .  $row["jokeclou"] . "</td><td>" .  $row["jokedate"] . "</td></tr>";
            }
        ?>
    </table>
</main>
<?php
include  "../includes/footer.php";
?>
