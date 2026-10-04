<?php
session_start(); if(!isset($_SESSION["graduate_id"])) { header("Location: login.php"); exit; }
$message="";
if($_SERVER["REQUEST_METHOD"]==="POST"){
  $size=$_POST["size"]??"";
  if(in_array($size,["Small","Medium","Large"],true)){
    $message="Request submitted successfully. Status: Pending.";
  }
}
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Borrow Gown</title><link rel="stylesheet" href="../css/style.css"></head>
<body><div class="form"><h2>Borrow a Graduation Gown</h2>
<?php if($message): ?><p class="success"><?=$message?></p><?php endif; ?>
<form method="post"><label>Gown Size</label><select name="size" required><option value="">Choose size</option><option>Small</option><option>Medium</option><option>Large</option></select><button>Submit Request</button></form></div></body></html>
