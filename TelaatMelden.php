<?php
$servername = "localhost";
$database = "telaat-studenten";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$voornaam = "";
$achternaam = "";
$klas = "";
$minuten = "";
$reden = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $klas = $_POST["klas"];
    $minuten = $_POST["minuten"];
    $reden = $_POST["reden"];

    if (strlen($voornaam) > 30 || strlen($achternaam) > 30 || strlen($klas) > 5 || $minuten < 0) {
        echo " <h3> Je hebt het onjuist ingevuld: </h3>";
        if (strlen($voornaam) > 30) {
            echo " <h3> Voornaam mag maximaal 30 karakters bevatten. </h3>";
        }
        if (strlen($achternaam) > 30) {
            echo " <h3> Achternaam mag maximaal 30 karakters bevatten. </h3>";
        }
        if (strlen($klas) > 5) {
            echo " <h3> Klas mag maximaal 5 karakters bevatten. </h3>";
        }
        if ($minuten < 0) {
            echo " <h3> Minuten mag niet minder dan 0 zijn. </h3>";
        }
    } else {

        do {
            if (empty($voornaam) || empty($achternaam) || empty($klas) || empty($minuten) || empty($reden)) {
                break;
            }

            $sql = "INSERT INTO studenten (voornaam, achternaam, klas, minuten, reden)
                    VALUES ('$voornaam', '$achternaam', '$klas', '$minuten', '$reden')";
            $result = $conn->query($sql);

            $voornaam = "";
            $achternaam = "";
            $klas = "";
            $minuten = "";
            $reden = "";

            header("Location: index.php");
            exit();

        } while (false);
    }
}
?>

<div class="telaatMelden">
    <a href="telaatMeldenForm.php">Terug naar te laat melden</a>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background-color: #2B3E50;
    }

    h3 {
        margin-top: 10px;
        text-align: center;
        color: white;
    }

    .telaatMelden {
        background-color: white;
        color: black; 
        border: none;
        border-radius: 10px;
        padding: 15px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
        display: block;
        margin: 10px 600px 20px 600px;
        text-align: center;
        margin-top: 50px;
    }

    .telaatMelden:hover {
        background-color: #66c2ff; 
    }

    a {
        text-decoration: none;
        color: black;
        font-size: x-large;
        font-weight: 500;
    }

</style>