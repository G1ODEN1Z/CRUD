<?php
$servername = "localhost";
$database = "telaat-studenten";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$student_id = "";
$voornaam = "";
$achternaam = "";
$klas = "";
$minuten = "";
$reden = "";

if ($_SERVER['REQUEST_METHOD'] === 'GET' ) {

    if (!isset($_GET['student_id'])) {
        header("Location: index.php");
        exit();
    }

    $student_id = $_GET["student_id"];

    $sql = "SELECT * FROM studenten WHERE student_id=$student_id";
    $result = $conn->query($sql);
    $row = $result->fetch();

    if(!$row) {
        header("Location: index.php");
        exit();
    }

    $voornaam = $row["voornaam"];
    $achternaam = $row["achternaam"];
    $klas = $row["klas"];
    $minuten = $row["minuten"];
    $reden = $row["reden"];

} else {

    $student_id = $_POST["student_id"];
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $klas = $_POST["klas"];
    $minuten = $_POST["minuten"];
    $reden = $_POST["reden"];

    do {
        if ( empty($voornaam) || empty($achternaam) || empty($klas) || empty($minuten) || empty($reden) ) {
            break;
        } 

        $sql = "UPDATE studenten
                SET voornaam = '$voornaam', achternaam = '$achternaam', klas = '$klas', minuten = '$minuten', reden = '$reden'
                WHERE student_id = $student_id";
        
        $result = $conn->query($sql);
    
        header("Location: index.php");
        exit();

    } while (false);
}

?>