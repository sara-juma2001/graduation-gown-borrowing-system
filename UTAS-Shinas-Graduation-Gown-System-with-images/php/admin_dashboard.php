<?php session_start(); if(empty($_SESSION["admin"])) { header("Location: admin_login.php"); exit; } ?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Admin Dashboard</title><link rel="stylesheet" href="../css/style.css"></head>
<body><main class="container"><h2>Admin Dashboard</h2><section class="cards">
<div class="card"><h3>Borrowing Requests</h3><p>Review pending requests and approve or reject them.</p></div>
<div class="card"><h3>Inventory</h3><p>Manage gown quantities by Small, Medium and Large.</p></div>
<div class="card"><h3>Returns</h3><p>Confirm returned gowns and restore inventory.</p></div>
</section>
<table class="table"><tr><th>Request</th><th>Graduate</th><th>Size</th><th>Status</th></tr><tr><td>#1001</td><td>GRAD2026-001</td><td>Medium</td><td class="pending">Pending</td></tr></table>
</main></body></html>
