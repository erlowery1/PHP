<?php

$file = "example.txt"; //making text file 
$handle = fopen($file, 'w'); //open the file with intention to writing, and assign it to a variable 
fclose($handle); // close file 
?>