<?php session_start(); if($_SERVER["REQUEST_METHOD"]==="POST"){ $_SESSION["admin"]=true; header("Location: admin_dashboard.php"); exit; } ?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Admin Login</title><link rel="stylesheet" href="../css/style.css"></head>
<body><div class="form"><h2>Admin Login</h2><form method="post"><label>Email</label><input type="email" required><label>Password</label><input type="password" required><button>Login</button></form></div></body></html>
