<?php include "db.php";

$username =  $_POST['username'];
$password = $_POST['password'];

$con = mysqli_connect('localhost:3307', 'root', 'root', 'loginapp');

//cleans and sanitizes app- makes it more secure against SQL statements
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

//encrypting password
//the 10 makes it like 10 times harder to get hacked 
$hashFormat = "$2y$10$";
$salt ="iusesomecrazystrings22";
$hash_and_salt = $hashFormat.$salt;
$password = crypt($password. $hash_and_salt);

$query = "INSERT INTO users(username, password)";
$query .= "VALUES('$username', '$password')";

$result = mysqli_query($con, $query);

if(!$result){
    die('Query FAILED'. mysqli_error());
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel = "stylesheet"
href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2
/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="col-sm-6">
            
            <form action="login_create.php" method = "post">
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name = "username" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name = "password" class="form-control">
                    
                </div>
                    <input class = "btn btn-primary" type="submit" name = "submit" value = "SUBMIT">
            </form>
            
        </div>
        
    </div>
    
</body>
</html>