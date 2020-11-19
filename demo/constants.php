<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        $number = 10;
    echo $number;
    //cant change value of a constant
    define("NAME", 1000);
    echo NAME;
    const CONSTANT ="hello world";
    echo CONSTANT;
    ?>
</body>
</html>