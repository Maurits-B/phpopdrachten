<?php
require "/inetpub/wwwroot/phpopdrachten/includes/functions.php";

$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];
$citizens = $_POST['citizens'];
$know = $_POST['know'];
$infected = $_POST['infected'];
?>
<style>
    table
    {
        border-collapse: collapse;
    }
    th
    {
        text-align: left;
        background-color: green;
        color: white;
    }
    td
    {
        border: 1px solid grey;
    }
</style>
<table>
    <tr>
        <th>
            Vraag
        </th>
        <th>
            Antwoord
        </th>
    </tr>
    <tr>
        <td>
            Naam
        </td>
        <td>
            <?php
            echo $name;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Leeftijd
        </td>
        <td>
            <?php
            echo $age;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Gemeente
        </td>
        <td>
            <?php
            echo $city;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Inwoners
        </td>
        <td>
            <?php
            echo $citizens;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Aantal besmet
        </td>
        <td>
            <?php
            echo $infected;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Kennis besmet
        </td>
        <td>
            <?php
            if ($know == 'yes')
            {
                echo "Ja";
            }
            else
            {
                echo "Nee";
            }
            ?>
        </td>
    </tr>
    <?php
    if ($know == 'yes')
    {
        echo '<tr><td colspan="2">
            De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken
        </td></tr>';
    }
    ?>
    <tr>
        <td>
            Kans per ontmoeting op besmetting
        </td>
        <td>
            <?php
            echoKans();
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Kans is 1 op
        </td>
        <td>
            <?php
            echo getKans1Op()
            ?>
        </td>
    </tr>
    <tr>
    <td colspan="2">
        <?php
        $kans1op = getKans1Op();
        echo $vergelijking = vergelijkOorzaken($kans1op);
        ?>
    </td>
</tr>
</table>

