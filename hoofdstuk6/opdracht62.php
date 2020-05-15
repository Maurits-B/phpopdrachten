<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
$title = '6.2';
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
?>
<main id="wrapper">
    <form id="gameFrm" method="get" action="opdracht62.php">
        <div class="float">
            <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">
            steen
            <img src="../images/steen.jpg">
        </div>
        <div class="float">
            <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">
            papier
            <img src="../images/papier.jpg">
        </div>
        <div class="float">
            <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">
            schaar
            <img src="../images/schaar.jpg">
        </div>
    </form>
    <?php
    $user1 = 0;
    $user2 = 0;

    print_r($_SESSION);
    $user1 += $_SESSION['user1'];
    $user2 += $_SESSION['user2'];
    //keuze
    $keuzespeler =  $_GET['keuze'];

    //Wat kiest de computer
    //Random wordt er een getal tussen 0 en 2 gekozen
    $opties = array("steen","papier","schaar");
    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];

    //keuze afbeeldingen
    if (isset($_GET['keuze'])){
        echo "Jij koos: <img src='../images/{$_GET['keuze']}.jpg'><br>";
        echo "&nbsp;&nbsp;De computer koos: <img src='../images/{$computerkeuze}.jpg'><br><br>";
    }

    /*
    *  gelijke keuzes wint niemand
    *  schaar wint van papier
    *  schaarverliest van steen
    *  steen wint van schaar
    *  steen verliest van papier
    *  papier wint van steen steen
    *  papier verliest schaar
    */
    if($computerkeuze === 'steen'){
        if($keuzespeler === 'steen'){
            echo "Niemand scoort<br> De score is " . $user1 . " tegen " . $user2;
        }
        elseif ($keuzespeler === 'papier'){
            $user1 ++;
            echo "jij scoort<br> De score is " . $user1 . " tegen " . $user2;
        }
        elseif ($keuzespeler === 'schaar'){
            $user2 ++;
            echo "De computer scoort<br> De score is " . $user1 . " tegen " . $user2;
        }
    }
    elseif ($computerkeuze === 'papier'){
        if($keuzespeler === 'papier'){
            echo "Niemand scoort<br> De score is " . $user1 . " tegen " . $user2;
        }
        elseif ($keuzespeler === 'schaar'){
            $user1 ++;
            echo "jij scoort<br> De score is " . $user1 . " tegen " . $user2;
        }
        elseif ($keuzespeler === 'steen'){
            $user2 ++;
            echo "De computer scoort<br> De score is " . $user1 . " tegen " . $user2;
        }
    }
    elseif ($computerkeuze === 'schaar'){
        if($keuzespeler === 'schaar'){
            echo "Niemand scoort<br> De score is " . $user1 . " tegen " . $user2;
        }
        elseif ($keuzespeler === 'steen'){
            $user1 ++;
            echo "jij scoort<br> De score is " . $user1 . " tegen " . $user2;
        }
        elseif ($keuzespeler === 'papier'){
            $user2 ++;
            echo "De computer scoort<br> De score is " . $user1 . " tegen " . $user2;
        }
    }
    //score controler

    if($user1 >= 5) {
        echo "<br>jij hebt gewonnen";
        $user1 = $user2 = 0;
    }
    elseif($user2 >= 5) {
        echo "<br>jij hebt verloren";
        $user1 = $user2 = 0;
    }

    $_SESSION['user1'] = $user1;
    $_SESSION['user2'] = $user2;
    ?>
</main>
<?php
include  "../includes/footer.php";

?>

