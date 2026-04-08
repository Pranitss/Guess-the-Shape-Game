<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Shape</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
$shapes = array(
    "circle" => "Circle",
    "square" => "Square",
    "triangle" => "Triangle",
    "rectangle" => "Rectangle",
    "hexagon" => "Hexagon",
    "star" => "Star"
);

$randomShapeKey = array_rand($shapes);
$randomShapeName = $shapes[$randomShapeKey];

if (isset($_POST['submit'])) {
    $userGuess = strtolower($_POST['guess']);

    if ($userGuess === $randomShapeKey) {
        echo "<h2>Congratulations! You guessed it right.</h2>";
    } else {
        echo "<h2>Sorry, that's incorrect. Try again!</h2>";
    }
}
?>

<h1>Guess the Shape Game</h1>
<p>Can you guess the shape?</p>

<form method="post">
    <label for="guess">Your Guess:</label>
    <select id="guess" name="guess" required>
        <option value="circle">Circle</option>
        <option value="square">Square</option>
        <option value="triangle">Triangle</option>
        <option value="rectangle">Rectangle</option>
        <option value="hexagon">Hexagon</option>
        <option value="star">Star</option>
    </select>
    <button type="submit" name="submit">Submit Guess</button>
</form>

<img src="<?php echo $randomShapeKey . '.png'; ?>" alt="<?php echo $randomShapeName; ?> Image">

</body>
</html>
