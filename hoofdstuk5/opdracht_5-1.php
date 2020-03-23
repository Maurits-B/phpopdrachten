<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
$title = 'Opdracht 5.1';
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <form action="5.1/form_data.php" method="get">
        <h2>Kees kroket</h2>
        <label>Bedrijfsnaam</label><br>
        <input name="compName" type="text"><br>
        <label>Voornaam</label><br>
        <input name="firstName" type="text"><br>
        <label>Achternaam</label><br>
        <input name="lastName" type="text"><br>
        <label>telefoon</label><br>
        <input name="phoneNumber" type="number"><br>
        <label>E-mail</label><br>
        <input name="mail" type="email"><br>
        <label>Bericht</label><br>
        <input name="message" type="text"><br>
        <input type="submit" value="Versturen">
    </form>
</main>
<?php
include  "../includes/footer.php";
?>
