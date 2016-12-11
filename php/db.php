<?php
/*
$host = 'mysql.hostinger.es';
$username = 'u882253491_root';
$password = '1234root';
$db = 'u882253491_wsra';
*/
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'funnyblog';

$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("SET character_set_client='utf8'");
$conn->query("SET character_set_results='utf8'");
$conn->query("set collation_connection='utf8_general_ci'");

?>