<?php require 'UpdateTelaat.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#x1F5A5 | Te laat updaten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Te laat melding updaten</h1>

    <div class="container">
        <div class="form-container">
            <form method="post">
                <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">

                <label>Voornaam</label>
                <input type="text" name="voornaam" value="<?php echo $voornaam; ?>" required>

                <label>Achternaam</label>
                <input type="text" name="achternaam" value="<?php echo $achternaam; ?>" required>

                <label>Klas</label>
                <input type="text" name="klas" value="<?php echo $klas; ?>" required>

                <label>Minuten</label>
                <input type="number"name="minuten" value="<?php echo $minuten; ?>" required>

                <label>Reden</label>
                <textarea cols="43" rows="4" class="form-control" name="reden" required><?php echo $reden; ?></textarea>

                <input class='action-button' type="submit" value="Aanpassen">
                <a class='action-button' href='index.php' style="margin-left: 2px;">Terug naar studenten</a>
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