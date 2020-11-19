<?php

$file = "example.txt"; //making text file 

if($handle = fopen($file, 'w')){//open the file with intention to writing, and assign it to a variable 

fwrite($handle, 'i love php');
    
fclose($handle); // close file 
    
}else{
    echo "the files could not be written to";
}

?>