<?php

$file_name = 'movies.txt';
//opens the file.txt file or implicitly creates the file
$myfile = fopen($file_name, 'w');
$movie_name = "Interstellar \n";
// write name to the file
fwrite($myfile, $movie_name);
// lets write another movie name to our file
$movie_name = "Lord of the rings \n";
fwrite($myfile, $movie_name);
// close the file
fclose($myfile);
