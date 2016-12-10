<?php
/*
$host = 'mysql.hostinger.es';
$username = 'u882253491_root';
$password = '1234root';
$db = 'u882253491_wsra';
*/
$host = 'localhost';
$username = 'root';
$password = '1234';
$db = 'funnyblog';

$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>