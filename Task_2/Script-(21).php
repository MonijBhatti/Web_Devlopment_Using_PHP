<!-- Script_21 Script to check if a given number is a palindrome or not and display the result. -->

<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h1>Palindrome Checker</h1>
    
    <?php
    // Function to check if a number is a palindrome
    function isPalindrome($number) {
        // Convert the number to a string
        $numberStr = strval($number);
        
        // Reverse the string
        $reverseStr = strrev($numberStr);
        
        // Compare the original and reversed strings
        return $numberStr === $reverseStr;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input as a number
        $userInput = $_POST["number"];
        $userInput = intval($userInput);
        
        // Check if it's a palindrome
        if (isPalindrome($userInput)) {
            echo "<p>$userInput is a palindrome.</p>";
        } else {
            echo "<p>$userInput is not a palindrome.</p>";
        }
    }
    ?>
    
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number">
        <input type="submit" value="Check Palindrome">
    </form>
</body>
</html>
