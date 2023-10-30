<!-- Script_23 Script to determine the largest among three numbers and display the result. -->

<!DOCTYPE html>
<html>
<head>
    <title>Largest Number Calculator</title>
</head>
<body>
    <h1>Largest Number Calculator</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input as three numbers
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $number3 = $_POST["number3"];
        
        // Convert the inputs to integers
        $number1 = intval($number1);
        $number2 = intval($number2);
        $number3 = intval($number3);
        
        // Determine the largest number
        $largest = max($number1, $number2, $number3);
        
        echo "<p>The largest number among $number1, $number2, and $number3 is: $largest</p>";
    }
    ?>
    
    <form method="post" action="">
        <label for="number1">Enter the first number:</label>
        <input type="number" id="number1" name="number1">
        <br><br>
        
        <label for="number2">Enter the second number:</label>
        <input type="number" id="number2" name="number2">
        <br><br>
        
        <label for="number3">Enter the third number:</label>
        <input type="number" id="number3" name="number3">
        <br><br>
        
        <input type="submit" value="Find Largest">
    </form>
</body>
</html>
