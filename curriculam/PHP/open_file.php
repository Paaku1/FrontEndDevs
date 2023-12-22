<?php

$file = "data.txt";
// Check the existence of file
if(file_exists($file)) {
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
    //echo fread($handle,filesize($file));
    //echo fgets($handle);
    readfile($file);
    fclose($handle);
} else {
    echo "ERROR: The file $file does not exist.";
}
