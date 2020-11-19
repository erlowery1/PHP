<?php
//SUPER GLOBAL VAR
print_r($_GET);
$id = 10;
$button = "SUBMIT";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="get.php?id =<?php echo $id;?>"><?php echo $button?></a>
</body>
</html>