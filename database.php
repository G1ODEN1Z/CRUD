<?php
$servername = "localhost";
$database = "telaat-studenten";
$username = "root";
$password = "";
                
$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

$sql = "SELECT * FROM studenten";
$result = $conn->query($sql);

while ($row = $result->fetch()) {
    echo "
    <tr>
        <td>{$row['voornaam']}</td>
        <td>{$row['achternaam']}</td>
        <td>{$row['klas']}</td>
        <td>{$row['minuten']} minuten</td>
        <td>{$row['reden']}</td>
        <td>
            <form method='post' action='VerwijderTelaat.php?student_id={$row['student_id']}' onsubmit='return confirm(\"Weet je zeker dat je deze telaat wilt verwijderen?\")'>
            <input type='hidden' name='student_id' value='<?php echo $row[student_id]; ?>'>
            <input type='submit' value='Verwijder' class='action-button'>
            </form>
        </td>
        <td>
            <a class='action-button' href='UpdateTelaatForm.php?student_id={$row['student_id']}'>Update</a>
        </td>
    </tr>
    ";
}
?>