<!DOCTYPE html>
<html>

<head>
    <title>Rock Paper Scissors</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Hoe wil je spelen?</h1>
    <form method="post">
        <br>
        <button type="submit" name="button" value="speler" formaction="game.php">Speler vs Speler</button>
        <p> of </p>
        <button type="submit" name="button" value="computer" formaction="computer.php">Speler vs Computer</button>
    </form>

</body>

</html>