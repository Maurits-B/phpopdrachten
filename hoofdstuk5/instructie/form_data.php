<?php
//zie alle mee gestuurde data
print_r($_POST);
//voornaam en achternaam echo
echo $_GET["firstname"];
echo $_GET["lastname"];

if ($_POST["subject"] == "php") {
    echo "hier staat een stuk text over php";
}