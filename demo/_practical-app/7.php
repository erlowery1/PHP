<?php include "functions.php"; ?>
<?php
//connect to database 
$con = mysqli_connect('localhost:3307', 'root', 'root', 'mylist');
//see if connection worked
if(!$con){
    die("database connection failed").mysqli_error($con);
    
}
//made a query
$query = "SELECT * from reports ";
//sent query
$result = mysqli_query($con, $query);
//checked if query worked
if(!$result){
    die("QUERY FAILED");
}

?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	<?php
        //while loop to go thru query results and print out days of the week 
        while($record = mysqli_fetch_assoc($result)){
            echo $record['days_of_week'];
            echo "<br>";
        }
        ?>
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
