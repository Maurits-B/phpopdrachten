<?php
//Haal de formulier gegevens op
$firstname = $_GET['firstname'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$lastname = $_GET['lastname'];
$subject = $_GET['subject'];
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.
require "lesopdracht_functions53.php";
//print_r($_GET);
var_dump($_GET);
echo "<table>";
if (!empty($firstname))
{
    echo"<tr><td>Voornaam</td><td>" . $firstname . "</td></tr>";
}
if (!empty($tussenvoegsel))
{
    echo"<tr><td>Tussenvoegsel</td><td>" . $tussenvoegsel . "</td></tr>";
}
if (!empty($lastname))
{
    echo"<tr><td>Achternaam</td><td>" . $lastname . "</td></tr>";
}
echo "<tr><td>". getTeacherName($subject)."</td></tr>";
echo "</table>";

