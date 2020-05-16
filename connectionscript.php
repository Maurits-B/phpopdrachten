<?php
//open de database conecctie en de EDBC driver
try {
    $pdo = new PDO ("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
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
}
catch (PDOException $e)
{
    echo 'Er is een probleem met het ophalen van jokes: ' . $e->getMessage();
    exit();
}

//Lege Array aanmaken voor de results
$aJokes = array();

//Doo de results heen loopem via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    //Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}

//tonen van de inhoud van aJokes
echo "<pre>";
var_dump($aJokes);
echo "</pre>";