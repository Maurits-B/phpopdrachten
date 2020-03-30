<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/

function getTeacherName(){
    $docent = $_GET['firstname'] ." ". $_GET['tussenvoegsel'] ." ". $_GET['lastname'] . " geeft het vak " . $_GET['subject'];
    return $docent;
}
?>