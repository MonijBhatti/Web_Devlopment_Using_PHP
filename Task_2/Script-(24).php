<!-- Script_24 Script to calculate the square root of a given number and display the result. -->

<!DOCTYPE html>
<html>
<head>
    <title>Square Root Calculator</title>
</head>
<body>
    <h1>Square Root Calculator</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input as a number
        $number = $_POST["number"];
        $number = floatval($number); // Convert to a floating-point number
        
        // Check if the number is non-negative
        if ($number >= 0) {
            // Calculate the square root
            $squareRoot = sqrt($number);
            echo "<p>The square root of $number is: $squareRoot</p>";
        } else {
            echo "<p>Please enter a non-negative number.</p>";
        }
    }
    ?>
    
    <form method="post" action="">
        <label for="number">Enter a non-negative number:</label>
        <input type="number" id="number" name="number" step="0.01" min="0">
        <input type="submit" value="Calculate Square Root">
    </form>
</body>
</html>
