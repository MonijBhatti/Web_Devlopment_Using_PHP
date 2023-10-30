<?php
// 15. Create a multidimensional array to store information about movies, including title, director, and release year for at least two movies. Display the information for one of the movies.

$movies = [
    ["title" => "Movie 1", "director" => "Director 1", "release_year" => 2020],
    ["title" => "Movie 2", "director" => "Director 2", "release_year" => 2022]
];

// Display information for the first movie
echo "Title: " . $movies[0]["title"] . ", Director: " . $movies[0]["director"] . ", Release Year: " . $movies[0]["release_year"];

?>