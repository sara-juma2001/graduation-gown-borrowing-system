<?php
session_start();
$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $studentId = trim($_POST["student_id"] ?? "");
    // Demo rule: only IDs beginning with GRAD are eligible.
    if (str_starts_with(strtoupper($studentId), "GRAD")) {
        $_SESSION["graduate_id"] = $studentId;
        header("Location: graduate_dashboard.php");
        exit;
    }
    $message = "Access denied. Only eligible graduating students can use this system.";
}
?>
<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><title>Graduate Login</title><link rel="stylesheet" href="../css/style.css"></head>
<body><div class="form"><h2>Graduate Login</h2>
<?php if($message): ?><p class="danger"><?=htmlspecialchars($message)?></p><?php endif; ?>
<form method="post"><label>Student ID</label><input name="student_id" placeholder="e.g. GRAD2026-001" required><label>Password</label><input type="password" name="password" required><button>Login</button></form>
<p>Only eligible graduating students are allowed to access the system.</p></div></body></html>
