<?php
session_start();
$_SESSION["nama"] = $_GET["TextNama"];
$_SESSION["email"] = $_GET["TextEmail"];
$_SESSION["pesan"] = $_GET["TextPesan"];
header("Location: index.php");
exit;
?>
