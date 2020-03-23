<table style="border: black 1px solid">
    <tr>
        <td>Bedrijfsnaam:</td>
        <td><?php
            echo $_GET["compName"];
            ?></td>
    </tr>
    <tr>
        <td>Voornaam:</td>
        <td><?php
            echo $_GET["firstName"];
            ?></td>
    </tr>
    <tr>
        <td>Achternaam:</td>
        <td><?php
            echo $_GET["lastName"];
            ?></td>
    </tr>
    <tr>
        <td>Telefoonnummer:</td>
        <td><?php
            echo $_GET["phoneNumber"];
            ?></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><?php
            echo $_GET["mail"];
            ?></td>
    </tr>
    <tr>
        <td>Bericht:</td>
        <td><?php
            echo $_GET["message"];
            ?></td>
    </tr>
</table>
