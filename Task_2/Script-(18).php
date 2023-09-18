<!-- Script_18: Write a PHP script that generates a random number between 1 and 10 and lets the user guess it. -->

<!DOCTYPE html>
<html>
<head>
    <title>Guess the Number</title>
</head>
<body>
    <h1>Guess the Number (Between 1 and 10)</h1>
    
    <?php
    // Generate a random number between 1 and 10
    $randomNumber = rand(1, 10);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user's guess
        $userGuess = $_POST["guess"];
        
        // Check if the guess is correct
        if ($userGuess == $randomNumber) {
            echo "<p>Congratulations! You guessed the correct number: $randomNumber</p>";
        } else {
            echo "<p>Sorry, your guess of $userGuess is incorrect. The correct number was: $randomNumber</p>";
        }
    }
    ?>
    
    <form method="post" action="">
        <label for="guess">Enter your guess (between 1 and 10):</label>
        <input type="number" id="guess" name="guess" min="1" max="10">
        <input type="submit" value="Guess">
    </form>
</body>
</html>
