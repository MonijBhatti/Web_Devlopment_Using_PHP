<!-- Script_25 Script to swap 2 nos without using 3rd variable using arithmetic operators. -->

<!DOCTYPE html>
<html>
<head>
    <title>Swap Two Numbers Without a Third Variable</title>
</head>
<body>
    <h1>Swap Two Numbers Without a Third Variable</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input as two numbers
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        
        // Perform the swap using arithmetic operators
        $number1 = $number1 + $number2;
        $number2 = $number1 - $number2;
        $number1 = $number1 - $number2;
        
        echo "<p>After swapping, Number 1 is: $number1</p>";
        echo "<p>After swapping, Number 2 is: $number2</p>";
    }
    ?>
    
    <form method="post" action="">
        <label for="number1">Enter the first number:</label>
        <input type="number" id="number1" name="number1">
        <br><br>
        
        <label for="number2">Enter the second number:</label>
        <input type="number" id="number2" name="number2">
        <br><br>
        
        <input type="submit" value="Swap Numbers">
    </form>
</body>
</html>
