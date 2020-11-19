<?php
//setting up a cookie, so if the user comes back in a week we have info
//on them and we can give them a specific result 
$name = "somename";
$value = 100;
//seconds times minutes * hours * days... adding a week to it
$expiration = time() +(60*60*24*7);
setcookie($name, $value, $expiration)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //taking the name of the cookie and print the value
        if(isset($_COOKIE["somename"])){
            $someOne = $_COOKIE["somename"];
            echo $someOne;
            
        }else{
            $someOne = "";
        }
    ?>
</body>
</html>