<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            text-align: center;
        }
    </style>
    <title>Rock Paper Scissors Game</title>
</head>

<body>
    <h1>Player VS Computer</h1>
    <h3>Choose a option:</h3>
    <form method="post">
        <button type="submit" name="button1" value="Rock"><img src="rock.png" width="200px" alt="Rock"></button>
        <button type="submit" name="button1" value="Paper"><img src="paper.png" width="200px" alt="Paper"></button>
        <button type="submit" name="button1" value="Scissors"><img src="scissors.png" width="200px" alt="Scissors"></button>
    </form>
    <?php
    if (isset($_POST['button1'])) {
        if ($_POST['button1'] == 'Rock') {
        } elseif ($_POST['button1'] == 'Paper') {
        } elseif ($_POST['button1'] == 'Scissors') {
        }
        $playerChoice = $_POST['button1'];
        setcookie('playerChoice', $playerChoice);

        $randomwoorden = array(
            "Rock",
            "Paper",
            "Scissors",
        );
        $kiezen = array_rand($randomwoorden);
        setcookie('CP', $randomwoorden[$kiezen]);
        header("Location: computer.php");
    }
    if (isset($_COOKIE['CP'])) {
        header("Location: result.php");
    }

    ?>
</body>

</html>