<?php
session_start();

if(isset($_POST['id1'])) {    

    include 'db.php';

    $sql = "INSERT INTO iruzkina (ID, Iruzkina, BerriaID, Egilea, Data)
            VALUES(
            DEFAULT,
            '$_POST[id1]', 
            ".(int)($_SERVER['REQUEST_URI'][22]).", 
            '$_SESSION[erabiltzailea]',
            '".date("Y-m-d H:i:s")."'
            )";
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Iruzkina ondo gorde da.');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Ezin izan da iruzkina gorde.');</script>";
    }

    $conn->close();
}