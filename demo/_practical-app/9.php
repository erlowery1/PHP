<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
        
      <?php
                
        if(isset($_GET['source'])){
            echo $_GET['source'];
        }        
    ?>
	<a href="9.php?source =111">CLICK HERE</a>
	
	<?php
                
            if(isset($_COOKIE['theName'])){
                echo $_COOKIE['theName'];
            }
                
   
  
            
    ?>
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
    //step 2         
    //setting up a cookie, so if the user comes back in a week we have info
    //on them and we can give them a specific result 
    //seconds times minutes * hours * days... adding a week to it
                
     session_start();
    $_SESSION['message'] = "hi how ya doing";
                
    
    $expiration = time() +(60*60*24*7);
    setcookie('theName','this is the value', $expiration);

          if(issest($_SESSION['message'])){
        echo $_SESSION['message'];
    }
        //step 3 
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>