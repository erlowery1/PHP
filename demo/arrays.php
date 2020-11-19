<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        //can use both types for arrays
        $number_List = array(1,2,3, '<h1>hello</h1>');
        //print the array 
        echo $number_List[3];
        //print structure of the array
        echo print_r($number_List);
        $number_List1 = [1,2,3]
    ?>
</body>
</html>