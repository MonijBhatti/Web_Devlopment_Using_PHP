<!-- Script_15: Write a PHP script to find the largest of three numbers entered by the user. -->

<!DOCTYPE html>
<html>
<head>
    <title>Find the Largest Number</title>
</head>
<body>
    <h1>Find the Largest Number</h1>
    <form method="post" action="largest_number.php">
        <label for="number1">Enter the first number:</label>
        <input type="text" id="number1" name="number1"><br><br>
        
        <label for="number2">Enter the second number:</label>
        <input type="text" id="number2" name="number2"><br><br>
        
        <label for="number3">Enter the third number:</label>
        <input type="text" id="number3" name="number3"><br><br>
        
        <input type="submit" value="Find Largest">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input
        $number1 = intval($_POST["number1"]);
        $number2 = intval($_POST["number2"]);
        $number3 = intval($_POST["number3"]);

        // Find the largest number
        $largest = $number1;

        if ($number2 > $largest) {
            $largest = $number2;
        }

        if ($number3 > $largest) {
            $largest = $number3;
        }

        // Display the result
        echo "<p>The largest number among $number1, $number2, and $number3 is: $largest</p>";
    }
    ?>

</body>
</html>
