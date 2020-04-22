<?php
//SESSION aanmaken
session_start(); //het starten van een sessie !!MOET OP ELKE PAGINA!!
$_SESSION["firstnamen"] = $_POST["firstname"];
$_SESSION["lastname"] = $_POST["lastname"];

//gegevens ophalen
print_r($_SESSION);


//session weg gooien
session_destroy();