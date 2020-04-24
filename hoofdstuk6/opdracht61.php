<?php
/**
 * User: Maurits Bakker
 * Date: Date
 * Time: **:** AM/PM
 * File: opdracht_2-1.php
 */
$title = 'Login';
include "../includes/header.php";
include "../includes/menu.php";
include "../includes/variabelen.php";
?>
<main id="wrapper">
    <form method="post" action="checklogin.php">
        <table>
            <tr>
                <td>
                    Naam
                </td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    Wachtwoord
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Login" name="submit">
                </td>
            </tr>
        </table>
    </form>
</main>
<?php
include  "../includes/footer.php";
?>
