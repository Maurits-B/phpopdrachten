<?php
/**
 * User: Maurits Bakker
 * Date: 7-2-2020
 * Time: 13:25
 * File: opdracht_2-2.php
 */
?>

<?php
$text1 = "Hallo";
$text2 = "een makkelijke taal";
$text3 = "toch z'n makkelijke taal ";
$text4 = "wat is ";
$text5 = "PHP ";
$text6 = "Nooit gedacht dat ";
$text7 = "De instalatie is best ingewikkeld ";
$text8 = "Fijn ";
$text9 = "? ";
$text10 = ". ";
$text11 = ", ";
$text12 = "<br>";
$text13 = "is ";
$text14 = "Vind je niet ";
?>

<!DOCTYPE html>

<html>
<head>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS\style.css">
    <title>
        Opdracht 2.2
    </title>
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
    <p>
        <?php
        echo
        $text1, $text11, $text4, $text5, $text2, $text10, $text12,
        $text7, $text10, $text8, $text9, $text12,
        $text6, $text5, $text3, $text10;
        ?>
    </p>
</body>
</html>
