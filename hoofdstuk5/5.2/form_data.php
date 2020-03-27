<html>
    <head>

    </head>
    <body>
    <?php
    print_r($_GET);
    ?>
        <h1>Uitschrijf Formulier</h1>
        <hr>
        <table>
            <tr>
                <td>Naam</td>
                <td>
                    <?php
                        echo $_GET["name"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Student nummer</td>
                <td>
                    <?php
                       echo $_GET["studentid"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Datum van uitschrijving</td>
                <td>
                    <?php
                         echo $_GET["date"];
                     ?>
                </td>
            </tr>
            <tr>
                <td>Rede van uitschrijving</td>
                <td>
                    <?php
                        echo $_GET["reason"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Leerjaar</td>
                <td>
                    <?php
                        echo $_GET["year"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Succesklas</td>
                <td>
                    <?php
                        if ($_GET["succesklas"] == "on")
                        {
                            echo "Ja";
                        }
                        else
                        {
                            echo "Er is niet aangemeld voor de Succesklas.";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Verwijder gegevens</td>
                <td>
                    <?php
                        if ($_GET["delinformation"] == "on")
                        {
                            echo "Ja";
                        }
                        else
                        {
                            echo "Gegevens hoeven niet worden verwijderd.";
                        }
                    ?>
                </td>
            </tr>
        </table>
         <p>
            Bericht <br>
             <?php
                echo $_GET["message"];
             ?>
        </p>
    </body>
</html>

