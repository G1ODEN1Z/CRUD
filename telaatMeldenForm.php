<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#x1F5A5 | Te laat melden</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Te laat melden</h1>
        <div class="container">
            <div class="form-container">
                <form action="TelaatMelden.php" method="post">
                    <label for="voornaam">Voornaam:</label>
                    <input type="text" name="voornaam" required><br><br>

                    <label for="achternaam">Achternaam:</label>
                    <input type="text" name="achternaam" required><br><br>

                    <label for="klas">Klas:</label>
                    <input type="text" name="klas" required><br><br>

                    <label for="klas">Minuten te laat:</label>
                    <input type="number" name="minuten" required><br><br>
                    
                    <label for="klas">Reden:</label>
                    <textarea name="reden" cols="43" rows="4" class="redenVeld" required></textarea><br><br>

                    <input type="submit" value="Melden">
                </form>
            </div>
        </div>
    <br> <br>
    <p class="pararesul"> Made by:
        <br>
        <a href="mailto:2184477@talnet.nl" class="mailto">Giovanni Deniz</a> ©
    </p>
</body>
</html>