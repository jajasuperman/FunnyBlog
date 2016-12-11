<?php
session_start();

if(isset($_POST['id1'])) {    

    include 'db.php';

    $conn = new mysqli($host, $username, $password, $db);
    $conn->query("SET character_set_client='utf8'");
    $conn->query("SET character_set_results='utf8'");
    $conn->query("set collation_connection='utf8_general_ci'");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO iruzkina (ID, Iruzkina, BerriaID, Egilea, Data)
            VALUES(
            DEFAULT,
            '$_POST[id1]', 
            ".(int)($_SERVER['REQUEST_URI'][22]).", 
            '$_SESSION[erabiltzailea]',
            '".date("Y-m-d H:i:s")."'
            )";
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Iruzkina ondo gorde da.');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Ezin izan da iruzkina gorde.');</script>";
    }

    $conn->close();
}