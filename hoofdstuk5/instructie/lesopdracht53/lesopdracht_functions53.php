<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/

function getTeacherName($subject){
//    $docent = $_GET['firstname'] ." ". $_GET['tussenvoegsel'] ." ". $_GET['lastname'] . " geeft het vak " . $_GET['subject'];
    if ($subject == 'js'){
        $docent = "meneer de Wetering geeft het vak JavaScript";
    }
    elseif ($subject== 'php'){
        $docent = "meneer Evers geeft het vak PHP";
    }
    return $docent;
}
?>