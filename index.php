<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#x1F5A5 | Overzicht studenten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Studenten</h1>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr class="tr">
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Klas</th>
                    <th nowrap>Minuten te laat</th>
                    <th>Reden te laat</th>
                    <th>Verwijderen</th>
                    <th>Updaten</th>
                </tr>
            </thead>
            <tbody class="tbody">
                <?php require 'database.php';?>
            </tbody>
        </table>
    </div>

    <div class="telaatMelden">
        <a href="telaatMeldenForm.php">Te laat melden</a>
    </div>

    <h1>Statistieken</h1>

    <div class="table-container2">
        <table class="table2">
            <tr>
                <td>Hoogst aantal minuten te laat</td>
                <?php require 'statistieken/Hoogst.php'; ?>
            </tr>
            <tr>
                <td>Gemiddeld aantal minuten</td>
                <?php require 'statistieken/Gemiddelde.php'; ?>
            </tr>
            <tr>
                <td>Totaal aantal minuten</td>
                <?php require 'statistieken/Totaal.php'; ?>
            </tr>
        </table>
    </div>

    <br><br>

    <p class="pararesul"> Made by:
        <br>
        <a href="mailto:2184477@talnet.nl" class="mailto">Giovanni Deniz</a> ©
    </p>

</body>
</html>