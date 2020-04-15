<h2>Stoplicht</h2>
<form action="form_data.php" method="post">
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
<?php
//de action is hetzelfde script als het formulier, eerst testen of het formulier
//verzonden is
if (isset($_POST['submit']))
{
    echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
}
//Een van de of beide radiobuttons is/zijnniet aangevinkt
if (!isset($_POST['trafficLightColor']) || !isset($_POST['ambulanceComming']))
{
    echo "Of het stoplichtkleur is onbekend of het is onbekend of de abulance eraan komt";
}
else
{
    $trafficLightColor = $_POST['trafficLightColor'];
    $ambulanceComing = $_POST['ambulanceComming'];
    echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een ambulance aan.";
    //Bepalen of je wel of niet mag doorrijden
    if ($trafficLightColor <> "groen" || $ambulanceComing == 'ja')
    {
        echo "<div class='rood'>Je moet stoppen!!!</div>";
    }
    else
    {
        echo "<div class='groen'>Je mag doorrijden</div>";
    }
}

echo "</div>";
?>