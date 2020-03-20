<?php

//instructie formulieren versturen met GET
?>
<form action="form_data.php" method="post">
    <label for="firstname">voornaam:</label> <input type="text" name="firstname" id="firstname">
    <label for="lastname">Achternaam:</label> <input type="text" name="lastname" id="lastname">
    <select name="subject">
        <option value="php">PHP</option>
        <option value="js">JavaScript</option>
    </select>
    <input type="submit">
</form>