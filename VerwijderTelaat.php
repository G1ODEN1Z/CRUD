<?php

if (isset ($_GET["student_id"])) {
    $student_id = $_GET["student_id"];

    $servername = "localhost";
	$database = "telaat-studenten";
	$username = "root";
	$password = "";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);


    $sql = "DELETE FROM studenten WHERE student_id=$student_id";
    $conn->query($sql);
}

header("Location: index.php");
exit();

?>