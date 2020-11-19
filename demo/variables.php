<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $name = 'Ellen';
    //these two numbers are diff var cause its case sensitive 
        $number = 100;
        $Number = 100;
    //. concatinates them together instead of the +
        echo $number. " ".$name;
    //can assign headers and images 
        $name = "<h1>HELLO</h1>";
        echo $name;
    ?>
</body>
</html>