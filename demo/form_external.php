<?php  
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $minimum = 5;
    $max = 10;
    $name = array("ellen", "alex", "marly","emily");
    if(strlen($username) < $minimum){
        
        echo "username has to be longer than five";
    }
    if(strlen($username) > $max){
        
        echo "username cannot be longer than 10";
    }
    
    if(!in_array($username, $name)){
        echo "sorry, you are not allowed to log in";
    } else {
        echo "welcome";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="form_process.php" method = "post">
    <input type="text" name = "username" placeholder = "Enter Username">
    <input type="password" name = "password" placeholder = "Enter Password">
    <br>
    <input type="submit" name = "submit">
    
</form>
</body>
</html>