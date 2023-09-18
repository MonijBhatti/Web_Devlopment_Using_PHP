<!-- Script_22 Script to calculate the area of a circle based on the given radius and display the result. -->

<!DOCTYPE html>
<html>
<head>
    <title>Circle Area Calculator</title>
</head>
<body>
    <h1>Circle Area Calculator</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input as the radius
        $radius = $_POST["radius"];
        $radius = floatval($radius); // Convert to a floating-point number
        
        // Check if the radius is valid (non-negative)
        if ($radius >= 0) {
            // Calculate the area of the circle
            $area = M_PI * pow($radius, 2);
            echo "<p>The area of the circle with radius $radius is: $area</p>";
        } else {
            echo "<p>Please enter a non-negative radius.</p>";
        }
    }
    ?>
    
    <form method="post" action="">
        <label for="radius">Enter the radius of the circle:</label>
        <input type="number" id="radius" name="radius" step="0.01" min="0">
        <input type="submit" value="Calculate Area">
    </form>
</body>
</html>
