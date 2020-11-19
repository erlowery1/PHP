<?php include "db.php";?>
<?php


function showAllData(){
    //global lets you see it from the other class
    global $con;
  $query = "SELECT * FROM users";
    $result = mysqli_query($con, $query);
    if(!$result){
        die('Query FAILED'. mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
         $id = $row['id'];
         echo "<option value='$id'>$id</option>";
    }  
}

function UpdateTable(){
    <?php
        global $con;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "UPDATE users SET ";
        $query .= "username = '$username' ";
        $query .= "password = '$password' ";
        //no quotes because id is an int, not a string
        $query .= "WHERE id= $id ";
        $result = mysqli_query($con, $query);
        if(!$result){
            die("query failed" . mysqli_error($con));
        }
 ?>
}
   
   function DeleteRow(){
    <?php
        global $con;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "DELETE FROM users ";
        //no quotes because id is an int, not a string
        $query .= "WHERE id= $id ";
        $result = mysqli_query($con, $query);
        if(!$result){
            die("query failed" . mysqli_error($con));
        }
 ?>
}
    
?>