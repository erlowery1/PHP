<?php

$file = "example.txt"; //making text file 

if($handle = fopen($file, 'w')){ //open the file with intention to writing, and assign it to a variable 

    fwrite($handle, 'I love php and this is really good studff');
}else{
    echo "the files could not be opened";
}

fclose($handle); // close file 
?>