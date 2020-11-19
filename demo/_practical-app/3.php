<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

for ($counter = 0; $counter < 10; $counter++){
    echo $counter."<br>";
}


$value = 5;
switch($value){
    case 6:
        echo "its 6";
        break;
    case 7:
        echo "its 7";
        break;
    case 5:
        echo "its 5";
        break;
}
echo "<br>";
if (2>1){
    echo "i love php";
}
    else if(3>2){
        echo " I love php";
    }
    else {
        echo " i love php";
    }
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>