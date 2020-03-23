<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
$title = 'Opdracht 5.2';
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <form action="5.2/form_data.php" method="get">
        <h2>Uitschrijfformulier KW1C</h2>
        <hr>
        <table>
            <tr>
                <td>Voor en achternaam</td>
                <td><input name="name" type="text"></td>
            </tr>
            <tr>
                <td>Studentnummer</td>
                <td><input name="studentid" type="number"></td>
            </tr>
            <tr>
                <td>Datum van uitschrijving</td>
                <td><input name="date" type="date"></td>
            </tr>
            <tr>
                <td>Reden van uitschrijving</td>
                <td>
                    <select name="reason">
                        <option value="Verkeerde keuze">Verkeerde keuze</option>
                        <option value="opgegeven">opgegeven door slechte cijfers</option>
                        <option value="veel afwezigheid">veel afwezigheid</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Leerjaar</td>
                <td>
                    <input name="year" type="radio" value="lj1"> Leerjaar 1</input><br>
                    <input name="year" type="radio" value="lj2"> Leerjaar 2</input><br>
                    <input name="year" type="radio" value="lj3"> Leerjaar 3</input>
                </td>
            </tr>
        </table>
        <input type="checkbox" name="succesklas" id="succesklas"><label for="succesklas">Ik wil me aanmelden bij de succesklas</label><br>
        <input type="checkbox" name="delinformation" id="information"><label for="information">Verwijder mijn gegevens uit het systeem</label><br>
        geef hieronder de reden van je uitschrijving<br>
        <input name="message" type="text"><br>
        <input type="submit" value="Versturen">
    </form>
</main>
<?php
include  "../includes/footer.php";
?>
