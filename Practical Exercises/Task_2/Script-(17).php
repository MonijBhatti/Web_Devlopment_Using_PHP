<!-- Script_17: Create a PHP script to check if a given year is a leap year and display the result. -->

<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
    <h1>Leap Year Checker</h1>
    <form method="post" action="">
        <label for="year">Enter a year:</label>
        <input type="text" id="year" name="year">
        <input type="submit" value="Check Leap Year">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the year from the user input
        $year = $_POST["year"];

        // Check if it's a leap year
        if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
            echo "<p>$year is a leap year.</p>";
        } else {
            echo "<p>$year is not a leap year.</p>";
        }
    }
    ?>

</body>
</html>
