<?php
require 'database.php';

// Query om het totale aantal recepten op te halen

$sql_total_recipes = "SELECT COUNT(*) AS total_recipes FROM welsh_eten";

$result_total_recipes = $conn->query($sql_total_recipes);

// Variabele initialisatie voor het totale aantal recepten

$total_recipes = 0;

// Controleer of de query resultaten heeft opgeleverd

if ($result_total_recipes->num_rows > 0) {

// Haal het aantal recepten op uit de resultaten

$row = $result_total_recipes->fetch_assoc();

$total_recipes = $row["total_recipes"];

}

// Query om de eerste negen gerechten op te halen

$sql_gerechten = "SELECT * FROM `welsh_eten` LIMIT 9";

$result_gerechten = $conn->query($sql_gerechten);

// Sluit de databaseverbinding

$conn->close();
?>

<!DOCTYPE html>

<html>

<head>

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/style.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<title>receptenboek</title>

</head>



<body>
    <header>
    <nav class="navbar">

<div class="navbar-brand">

<a href="#">welcome</a><br>

<span style="color: white;">Aantal recepten: <?php echo $total_recipes; ?></span><br>

</div>

<div class="navbar-links">

<a href="">RECEPTEN</a>

<a href="">SPECIAAL</a>

<a href="">FAQ's</a>

</div>

</nav>
    </header>

    <div class="container">

<?php while ($gerecht = $result_gerechten->fetch_assoc()) : ?> <!-- hier haal je jouw gemaakte variable op en zet je het in een while statement -->

<div class="box">

<h1><?php echo $gerecht["naam_gerecht"] ?></h1> <!-- Toon de naam van het gerecht -->

<a href="recept.php?id=<?php echo $gerecht['id'] ?>"> <!-- hier haal je de informatie per gerecht uit de database en maakt er een link voor aan -->

<img src="images/<?php echo $gerecht['afbeelding'] ?>" alt=""> <!-- Toon de afbeelding van het gerecht uit de database -->

</a>

</div>

<?php endwhile; ?> <!-- einde endwhile -->

</div>

</body>