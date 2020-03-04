<?php
$day = date("l");

switch ($day)
{
    case "Monday":
        echo "Het is maandag";
        break;
    case "Tuesday":
        echo "Het is dinsdag";
        break;
    case "Wednesday":
        echo "Het is woensdag";
        break;
    case "Thursday":
        echo "Het is donderdag";
        break;
    default:
        echo "Er is iets fout gegaan";
}