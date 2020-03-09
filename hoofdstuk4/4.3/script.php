<?php
//begin taak2
$taak2 = "lancering in: ";
$counter = 19;

while ($counter >= 0){
    $taak2 .=$counter . ", ";
    $counter--;
}
echo $taak2;

//begin taak 3
$taak3 = "lancering in: ";
for ($x = 19; $x >= 0; $x--){
     $taak3 .= $x . ', ';
}

//begin taak 4
$y = 1;
$taak4 = "";
while ($y <= 6){
    $taak4 .= "<h$y>dit is de " . $y . "e iteratie</h$y><br>";
    $y++;
}
echo $taak4;

//begin taak 5
$taak5 = "";
for ($z = 1; $z <=10; $z++){
    $taak5 .= "<td>dit is de " . $z . "e iteratie</td>";
}
$taak5 = "<table'><tr>" . $taak5 . "</tr></table>";

//begin taak 6
$task6 = "";
$age = 17;
$year = 2019;
while ($age != 0){
    $task6 .= "<p>In $year was ik $age jaar oud</p>";
    $year--;
    $age--;
}

$task6 = "<p>In 2020 word ik 18 jaar oud</p>" . $task6 . "<p>In 2002 ben ik geboren</p>";


//begin taak 7
$task7 = "";
$year = 2019;
for ($age = 17; $age != 0; $age--){
    switch ($age){
        case 2:
            $task7 .= "<p>in $year was ik ". $age . " jaar oud en werd ik een peuter.</p>";
            $year--;
            break;
        case 4:
            $task7 .= "<p>in $year was ik ". $age . " jaar oud en werd ik een kleuter.</p>";
            $year--;
            break;
        case 8:
            $task7 .= "<p>in $year was ik ". $age . " jaar oud en werd ik een tiener.</p>";
            $year--;
            break;
        case 12:
            $task7 .= "<p>in $year was ik ". $age . " aar oud en werd ik een puber.</p>";
            $year--;
            break;
        case 18:
            $task7 .= "<p>in $year was ik ". $age . " jaar oud en werd ik een adolescent.</p>";
            $year--;
            break;
        case 20:
            $task7 .= "<p>in $year was ik ". $age . " jaar oud en werd ik een volwassenen.</p>";
            $year--;
            break;
        default:
            $year--;
    }
}

$task7 = "<p>In 2020 word ik 18 jaar oud </p>" . $task7 . "<p>In 2002 ben ik geboren en was ik een baby</p>";