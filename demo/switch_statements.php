<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $number = 94;
    //tests one single value against a lot of conditions
    switch($number){
        case 34:
            echo "it is 34";
            break;
        case 34:
            echo "it is 34";
            break;
        case 35:
            echo "it is 34";
            break;
        case 24:
            echo "it is 24";
            break;
        //if none of the cases work
        default:
            echo "we couldnt find anything";
    }
    ?>
</body>
</html>