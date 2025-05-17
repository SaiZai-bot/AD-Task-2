<?php
function displayMovies($movies) {
    echo '<div class ="movie-container">';
    echo '<div class ="movie-table">';
    foreach ($movies as $movie) {
        echo '<div class ="movie-card">';
        echo "<h2>{$movie['title']}</h2>";
        echo "<p>Genre: {$movie['genre']}</p>";
        echo "<p>Date: {$movie['date']}</p>";
        echo "<p>Time: {$movie['time']}</p>";
        echo '<img src="' . $movie['poster'] . '" alt="' . $movie['title'] . 'Poster" class ="movie-poster">';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';

}


?>