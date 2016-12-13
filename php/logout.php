<?php
session_start();
session_destroy(); // Sesioa ezabatu $_SESSION galtzeko, eta erabiltzailea deslogeatzeko
header("Location: ../index.php");
exit();
?>