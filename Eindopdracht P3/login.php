<?php
require "script.php";
?>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
<body>
<h1>Bergheen</h1>
    <?php
        if ($showLoginScreen == true)
        {
    ?>
        <form action="login.php" method="post">
            <p>
                Login om onze adresgegevens + openingstijden te zien
            </p>
            <table>
                <tr>
                    <td></td>
                    <td>
                        <?php
                            echo $message;
                        ?>
                    </td>
                </tr>
                <!--Username-->
                <tr>
                    <td>username</td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <!--Password-->
                <tr>
                    <td>password</td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
                <!--Submit button-->
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    <?php
        }
        else
        {
    ?>
        <p>Welkom!</p>
        <fieldset>
            <legend>Openingstijden</legend>
                Do: 22:00<br>
                Vr: All day<br>
                Za: All day<br>
                Zo: 12:00
        </fieldset>
        <fieldset>
            <legend>Adresgegevens</legend>
                Am Wriezener Bahnhof<br>
                10243 Berlin<br>
                Duitsland
        </fieldset>
        <p id="secret">
            Deze gegevens dien je ten alle tijden geheim te houden!
        </p>
    <?php
        }
    ?>
</body>
</html>