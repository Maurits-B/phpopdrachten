<?php
$task1 = "";

for ($counter = 0; $counter <=7; $counter++){
    $adder = strtotime("now +" . $counter . "days");
    $task1 .= "Dag " . date("w \i\s l d-m-Y", $adder) . "<br>";
}