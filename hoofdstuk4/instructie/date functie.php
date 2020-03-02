<?php
include "../../includes/header.php";
include "../../includes/menu.php";
?>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <p>
        linkjes voor fun <br>
        <a href=""></a>
    </p>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
//    date("d-m-Y H:i");
    $month = date("n");

    if($month == 3)
    {
        echo "het is vandaag lente";
    }
    elseif($month >= 3 && $month <= 6)
    {
        echo "het is lente";
    }
    elseif ($month >= 6 && $month <= 9)
    {
        echo "het is zomer";
    }
    ?>
</main>
<?php
include "../../includes/footer.php";
?>
