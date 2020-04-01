<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
$title = 'Opdracht 5.3';
require "../includes/functions.php";
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <form action="5.3/form_data.php" method="post">
        <table>
            <tr>
                <td>
                    Wat is je naam:
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    wat is je leeftijd:
                </td>
                <td>
                    <input type="number" name="age">
                </td>
            </tr>
            <tr>
                <td>
                    Gemeente:
                </td>
                <td>
                    <select name="city">
                        <option value="denbosch">Den Bosch</option>
                        <option value="amsterdam">Amsterdam</option>
                        <option value="breda">Breda</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Aantal inwoners gemeente:
                </td>
                <td>
                    <input type="number" name="citizens">
                </td>
            </tr>
            <tr>
                <td>
                    Ken je mensen die besmet zijn in je woonplaats?
                </td>
                <td>
                    <input type="radio" name="infected" value="yes"> ja
                    <input type="radio" name="infected" value="no"> nee
                </td>
            </tr>
            <tr>
                <td>
                    Aantal mensen besmet in je gemeente? *
                </td>
                <td>
                    <input type="text" name="infected2">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Verzend">
                </td>
            </tr>
        </table>
        <p>
            *Zie aantallen per gemeente per 100.000 bewonders <a style="color: blue; text-decoration: underline;" href="https://www.rivm.nl/">site RIVM</a>
        </p>
    </form>
</main>
<?php
include  "../includes/footer.php";
?>
