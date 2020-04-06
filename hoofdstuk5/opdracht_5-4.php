<?php
/**
 * User: Maurits Bakker
 * Date: 6-4-2020
 * Time: 14:28
 * File: opdracht_5-4.php
 */
$title = 'opdracht 5.4';
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
?>
<main id="wrapper">
    <div>
        <h2>Stoplicht</h2>
        <form action="5.4/form_data.php" method="post">
            <b>komt er een ambulance aan?</b>
            <input type="radio" name="ambulanceComming" value="wel"> Ja
            <input type="radio" name="ambulanceComming" value="niet"> Nee
            <br>
            <b>stoplicht kleur?</b>
            <input type="radio" name="trafficLightColor" value="groen"> groen
            <input type="radio" name="trafficLightColor" value="oranje"> oranje
            <input type="radio" name="trafficLightColor" value="rood"> rood
            <br>
            <input type="submit" name="submit" value="Versturen">
        </form>
    </div>
</main>
<?php
include  "../includes/footer.php";
?>
