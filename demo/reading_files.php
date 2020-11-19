<?php

$file = "example.txt"; //making text file 
if($handle = fopen($file, 'r')){//open the file with intention to read, and assign it to a variable 
echo $content = fread($handle, filesize($file)); //10 is bites. each bite equals a character
    
fclose($handle); // close file 
    
}else{
    echo "the files could not be written to";
}

?>