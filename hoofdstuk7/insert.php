<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
$title = 'opdracht 7.4';
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
include "../includes/functions.php";
include "functions.php";
?>
    <main id="wrapper">
        <form method="post" action="insert.php">
            <h2>Nieuwe grap toevoegen</h2>
            <table>
                <tr>
                    <td>Joketext</td>
                    <td><input type="text" name="joketext"></td>
                </tr>
                <tr>
                    <td>Jokeclou</td>
                    <td><input type="text" name="jokeclou"></td>
                </tr>
            </table>
            <input type="submit" value="Verstuur">
            <?php
                if (isset($_POST['joketext'])){
                    $today = date("Y-m-d");
                    //$now = $today['year'] ."/". $today['mon'] ."/". $today['mday'] ." ". $today['hours'] .":". $today['minutes'] .":". $today['seconds'];
                    echo $query = "INSERT INTO dbo.joke VALUES ('" . $_POST['joketext'] . "', '" . $_POST['jokeclou'] . "', '" . $today . "')";

                    startConnection();

                    executeQueryViaExec($query);
                }
            ?>
        </form>
    </main>
<?php
include  "../includes/footer.php";
?>
<?php
