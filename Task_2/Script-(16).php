<!-- Script_16: Develop a PHP script that takes a sentence as input and counts the number of vowels in 
it. -->

<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels in a Sentence</title>
</head>
<body>
    <h1>Count Vowels in a Sentence</h1>
    <form method="post" action="">
        <label for="sentence">Enter a sentence:</label>
        <input type="text" id="sentence" name="sentence">
        <input type="submit" value="Count Vowels">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the sentence from the user input
        $sentence = $_POST["sentence"];

        // Convert the sentence to lowercase to make the counting case-insensitive
        $sentence = strtolower($sentence);

        // Initialize a variable to count vowels
        $vowelCount = 0;

        // Define an array of vowels
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        // Loop through each character in the sentence
        for ($i = 0; $i < strlen($sentence); $i++) {
            $character = $sentence[$i];

            // Check if the character is a vowel
            if (in_array($character, $vowels)) {
                $vowelCount++;
            }
        }

        // Display the vowel count
        echo "<p>The number of vowels in the sentence is: $vowelCount</p>";
    }
    ?>

</body>
</html>
