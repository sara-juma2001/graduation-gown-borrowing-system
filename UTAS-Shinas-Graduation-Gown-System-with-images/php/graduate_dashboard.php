<?php session_start(); if(!isset($_SESSION["graduate_id"])) { header("Location: login.php"); exit; } ?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Graduate Dashboard</title><link rel="stylesheet" href="../css/style.css"></head>
<body><div class="nav"><div class="container"><strong>Graduate Dashboard</strong></div></div>
<main class="container"><section class="cards">
<article class="card"><h3>Borrow a Gown</h3><p>Select your required gown size and submit a request.</p><a class="btn primary" href="request.php">New Request</a></article>
<article class="card"><h3>My Requests</h3><p>Track pending, approved and rejected requests.</p><a class="btn primary" href="requests.php">View Requests</a></article>
<article class="card"><h3>Notifications</h3><p>View updates from the administrator.</p><a class="btn primary" href="notifications.php">View Notifications</a></article>
</section></main></body></html>
