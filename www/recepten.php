<?php
require 'database.php';

// Query om het totale aantal recepten op te halen

$sql_total_recipes = "SELECT COUNT(*) AS total_recipes FROM welsh_eten";

$result_total_recipes = $conn->query($sql_total_recipes);
?>

<!DOCTYPE html>

<html>

<head>

<link href="css/index.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<title>RECEPTENBOEK</title>

</head>

<body>
    <header>
    <nav class="navbar">

<div class="navbar-brand">

<a href="#">WELKOM!</a><br>

<span style="color: white;">Aantal recepten: <?php echo $total_recipes; ?></span><br>

</div>

<div class="navbar-links">

<a href="">RECEPTEN</a>

<a href="">SPECIAAL</a>

<a href="">FAQ's</a>

</div>

</nav>
    </header>
</body>