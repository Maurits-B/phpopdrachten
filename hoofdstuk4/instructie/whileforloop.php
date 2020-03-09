<?php
// while & for loop
$counter = 0;
$text = "";

while ($counter <= 10){
    $text .= "hoi" . $counter . "<br>";
    $counter++;
}

echo $text;


for ($teller = 0; $teller <= 10; $teller++){
    echo "wat" . $teller . "<br>";
}