<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_COOKIE['player1Choice']) && isset($_COOKIE['player2Choice'])) {
        $player1 = $_COOKIE['player1Choice'];
        $player2 = $_COOKIE['player2Choice'];
        if ($player1 == 'Rock' && $player2 == 'Rock') {
            echo "<h1>It's a tie!</h1>" . "<h3>Player 1 chose $player1</h3>" . "<h3>Player 2 chose $player2</h3>";
        } elseif ($player1 == 'Rock' && $player2 == 'Paper') {
            echo "<h1>Player 2 wins!</h1> " . "<h3>Player 1 chose $player1</h3>" . "<h3>Player 2 chose $player2</h3>";
        } elseif ($player1 == 'Rock' && $player2 == 'Scissors') {
            echo "<h1>Player 1 wins!</h1>" . "<h3>Player 1 chose $player1</h3>" . "<h3>Player 2 chose $player2</h3>";
        } elseif ($player1 == 'Paper' && $player2 == 'Rock') {
            echo "<h1>Player 1 wins!</h1>" . "<h3>Player 1 chose $player1</h3>" . "<h3>Player 2 chose $player2</h3>";
        } elseif ($player1 == 'Paper' && $player2 == 'Paper') {
            echo "<h1>It's a tie!</h1>" . "<h3>Player 1 chose $player1</h3>" . "<h3>Player 2 chose $player2</h3>";
        } elseif ($player1 == 'Paper' && $player2 == 'Scissors') {
            echo "<h1>Player 2 wins!</h1>" . "<h3>Player 1 chose $player1</h3>" . "<h3>Player 2 chose $player2</h3>";
        } elseif ($player1 == 'Scissors' && $player2 == 'Rock') {
            echo "<h1>Player 2 wins!</h1>" . "<h3>Player 1 chose $player1</h3>" . "<h3>Player 2 chose $player2</h3>";
        } elseif ($player1 == 'Scissors' && $player2 == 'Paper') {
            echo "<h1>Player 1 wins!</h1>" . "<h3>Player 1 chose $player1</h3>" . "<h3>Player 2 chose $player2</h3>";
        } elseif ($player1 == 'Scissors' && $player2 == 'Scissors') {
            echo "<h1>It's a tie!</h1>" . "<h3>Player 1 chose $player1</h3>" . "<h3>Player 2 chose $player2</h3>";
        }
    } elseif (isset($_COOKIE['playerChoice']) && isset($_COOKIE['CP'])) {
        $player = $_COOKIE['playerChoice'];
        $computer = $_COOKIE['CP'];
        if ($player == 'Rock' && $computer == 'Rock') {
            echo "<h1>It's a tie</h1>" . "<h3>Player chose $player</h3>" . "<h3>Computer chose $computer</h3>";
        } elseif ($player == 'Rock' && $computer == 'Paper') {
            echo "<h1>you lose :(</h1> " . "<h3>Player chose $player</h3>" . "<h3>Computer chose $computer</h3>";
        } elseif ($player == 'Rock' && $computer == 'Scissors') {
            echo "<h1>You win :)</h1>" . "<h3>Player chose $player</h3>" . "<h3>Computer chose $computer</h3>";
        } elseif ($player == 'Paper' && $computer == 'Rock') {
            echo "<h1>You win :)</h1>" . "<h3>Player chose $player</h3>" . "<h3>Computer chose $computer</h3>";
        } elseif ($player == 'Paper' && $computer == 'Paper') {
            echo "<h1>It's a tie</h1>" . "<h3>Player chose $player</h3>" . "<h3>Computer chose $computer</h3>";
        } elseif ($player == 'Paper' && $computer == 'Scissors') {
            echo "<h1>you lose :(</h1>" . "<h3>Player chose $player</h3>" . "<h3>Computer chose $computer</h3>";
        } elseif ($player == 'Scissors' && $computer == 'Rock') {
            echo "<h1>you lose :(</h1>" . "<h3>Player chose $player</h3>" . "<h3>Computer chose $computer</h3>";
        } elseif ($player == 'Scissors' && $computer == 'Paper') {
            echo "<h1>You win :)</h1>" . "<h3>Player chose $player</h3>" . "<h3>Computer chose $computer</h3>";
        } elseif ($player == 'Scissors' && $computer == 'Scissors') {
            echo "<h1>It's a tie</h1>" . "<h3>Player chose $player</h3>" . "<h3>Computer chose $computer</h3>";
        }
    } else {
        echo "<h1>Something went wrong</h1>";
    }
    ?>
    <br>
    <form method="post">
        <button name="submit" type="submit">Play again</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        setcookie("player1Choice", "", time() - 3600);
        setcookie("player2Choice", "", time() - 3600);
        setcookie("playerChoice", "", time() - 3600);
        setcookie("CP", "", time() - 3600);
        setcookie("mode", "", time() - 3600);
        header("Location: index.php");
    }
    ?>
</body>

</html>