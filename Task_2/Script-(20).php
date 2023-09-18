<!-- Script_20 Script to find the factorial of a given number and display the result -->

<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    
    <?php
    // Function to calculate the factorial of a number
    function factorial($n) {
        if ($n === 0) {
            return 1; // The factorial of 0 is 1
        } else {
            return $n * factorial($n - 1);
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input as a positive integer
        $userInput = $_POST["number"];
        $userInput = intval($userInput);
        
        // Check if the input is a non-negative integer
        if ($userInput >= 0) {
            // Calculate the factorial
            $result = factorial($userInput);
            echo "<p>The factorial of $userInput is: $result</p>";
        } else {
            echo "<p>Please enter a non-negative integer.</p>";
        }
    }
    ?>
    
    <form method="post" action="">
        <label for="number">Enter a non-negative integer:</label>
        <input type="number" id="number" name="number" min="0">
        <input type="submit" value="Calculate Factorial">
    </form>
</body>
</html>
