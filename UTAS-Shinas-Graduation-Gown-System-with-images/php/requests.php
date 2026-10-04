<?php session_start(); if(!isset($_SESSION["graduate_id"])) { header("Location: login.php"); exit; } ?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>My Requests</title><link rel="stylesheet" href="../css/style.css"></head>
<body><main class="container"><h2>My Borrowing Requests</h2><table class="table"><tr><th>Request</th><th>Size</th><th>Status</th></tr><tr><td>#1001</td><td>Medium</td><td class="pending">Pending</td></tr></table></main></body></html>
