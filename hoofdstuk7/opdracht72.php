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

        //open de database conecctie en de EDBC driver
        try {
            $pdo = new PDO ("odbc:odbc2sqlserver");
        } catch (PDOException $e) {
            echo "<h1>Database error:</h1>";
            echo $e->getMessage();
            die();
        }

        echo "database connectie is gelukt";

        //Uitvoeren van een SQL query
        try {
            //Query scrhijven
            $sql = 'SELECT * FROM joke';

            //Query uitvoeren
            $result = $pdo->query($sql);
        } catch (PDOException $e) {
            echo 'Er is een probleem met het ophalen van jokes: ' . $e->getMessage();
            exit();
        }

        //Lege Array aanmaken voor de results
        $aJokes = array();

        //Doo de results heen loopem via een while
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            //Result wegschrijven in de $aJokes array
            $aJokes[] = $row;
        }

        //tonden van inhoud database in een table
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Joketext</th>
                    <th>Jokeclou</th>
                    <th>Jokedate</th>
                </tr>";
        foreach ($aJokes as $text => $value) {
            echo "<tr>";
            foreach ($value as $value => $inhoud){
                echo "<td>" . $inhoud . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </main>
<?php
include  "../includes/footer.php";
?>