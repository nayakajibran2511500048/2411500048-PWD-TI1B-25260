<?php
session_start();
$_SESSION["nama"] = $_GET["textNama"];
$_SESSION["email"] = $_GET["TextEmail"];
$_SESSION["pesan"] = $_GET["TextPesan"];
?>