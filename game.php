<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            text-align: center;
        }
    </style>
    <title>Rock Paper Scissors</title>
</head>

<body>
    <h1>Rock Paper Scissors</h1>
    <div id="speler1">
        <h3>Player 1, choose a option:</h3>
        <form method="post">
            <button type="submit" name="button1" value="Rock"><img src="rock.png" width="200px" alt="Rock"></button>
            <button type="submit" name="button1" value="Paper"><img src="paper.png" width="200px" alt="Paper"></button>
            <button type="submit" name="button1" value="Scissors"><img src="scissors.png" width="200px" alt="Scissors"></button>
        </form>
    </div>
    <?php
    if (isset($_POST['button1'])) {
        if ($_POST['button1'] == 'Rock') {
        } elseif ($_POST['button1'] == 'Paper') {
        } elseif ($_POST['button1'] == 'Scissors') {
        }
        $player1Choice = $_POST['button1'];
        setcookie('player1Choice', $player1Choice);
    ?>
        <div id="speler2">
            <h3>Player 2, choose a option:</h3>
            <form method="post">
                <button type="submit" name="button2" value="Rock"><img src="rock.png" width="200px" alt="Rock"></button>
                <button type="submit" name="button2" value="Paper"><img src="paper.png" width="200px" alt="Paper"></button>
                <button type="submit" name="button2" value="Scissors"><img src="scissors.png" width="200px" alt="Scissors"></button>
            </form>
        </div>
        <style type="text/css">
            #speler1 {
                display: none;
            }
        </style>
    <?php
    }
    ?>
    <?php
    if (isset($_POST['button2'])) {

        if ($_POST['button2'] == 'Rock') {
        } elseif ($_POST['button2'] == 'Paper') {
        } elseif ($_POST['button2'] == 'Scissors') {
        }
    ?>
        <style type="text/css">
            #speler1 {
                display: none;
            }

            #speler2 {
                display: none;
            }
        </style>
    <?php
    
        $player2Choice = $_POST['button2'];
        setcookie('player2Choice', $player2Choice);
        header("Location: result.php");
    }
    ?>

</body>

</html>