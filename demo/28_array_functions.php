<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $list = [343, 35,45,87,66,69];
    echo max($list);
    echo "<br>";
    echo min($list);
    echo "<br>";
    print_r($list);
    sort($list);
    print_r($list);
    
    ?>
</body>
</html>