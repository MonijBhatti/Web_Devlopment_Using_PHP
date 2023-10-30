<!-- Script_19: Develop a PHP script that takes a positive integer as input and checks whether it is a 
prime number. -->

<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    
    <?php
    // Function to check if a number is prime
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        
        if ($number <= 3) {
            return true;
        }
        
        if ($number % 2 == 0 || $number % 3 == 0) {
            return false;
        }
        
        $i = 5;
        while ($i * $i <= $number) {
            if ($number % $i == 0 || $number % ($i + 2) == 0) {
                return false;
            }
            $i += 6;
        }
        
        return true;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input as a positive integer
        $userInput = $_POST["number"];
        $userInput = intval($userInput);
        
        // Check if it's a prime number
        if (isPrime($userInput)) {
            echo "<p>$userInput is a prime number.</p>";
        } else {
            echo "<p>$userInput is not a prime number.</p>";
        }
    }
    ?>
    
    <form method="post" action="">
        <label for="number">Enter a positive integer:</label>
        <input type="number" id="number" name="number" min="1">
        <input type="submit" value="Check Prime">
    </form>
</body>
</html>