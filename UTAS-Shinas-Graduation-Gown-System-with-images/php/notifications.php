<?php session_start(); if(!isset($_SESSION["graduate_id"])) { header("Location: login.php"); exit; } ?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Notifications</title><link rel="stylesheet" href="../css/style.css"></head>
<body><main class="container"><h2>Notifications</h2><div class="card"><p>Your borrowing request is currently under review.</p></div></main></body></html>
