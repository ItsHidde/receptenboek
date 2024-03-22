<?php
require 'database.php';

// Standaard ID instellen op 1 als er geen ID is opgegeven via GET

$id = isset($_GET['id']) ? $_GET['id'] : 1;
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

<footer>

<div class="bottom">

the end

</div>

</footer>



</body>
</html>