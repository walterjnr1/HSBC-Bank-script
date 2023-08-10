<?php
include 'topbar.php'; 
require_once("object.php");
if(empty($_SESSION['login_username']))
  {   
  header("Location: ../index.php"); 
  }


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Validating your Transfer| <?php echo $row_website['website_name'];   ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon; ?>">

</head>

<body>
    <div id="page-wrap" style='width: 50%; margin: auto;'>
		
				 <h1>   <p style="color:#FF0000"; id="demo"> </p> </h1>
  
 </h3> <?php   echo "   <a href='fundtransfer.php'>Click here to Go BACK</a>";  ?> </h3>
  
        <?php        
            //create new progress bar object
            $po = new __construct();

            //in records present, set loading text and display bar
            $po->text = "Please wait for a minute...";
            $po->DisplayMeter(); 

            //grab some data from a database to loop through
            $count = 10;

            //give the number of units in your loop to the object
            $po->Calculate($count);

            //loop through the returned data 
            for($i=0; $i < $count; $i++){

                //do something, like print a number
             //   print("User ID: $i <br />");
                
                // This is for the buffer achieve the minimum size in order to flush data
                echo str_repeat(' ', 2480);

                //simulate long, complex function function
                usleep(500000);

                //at the end of each loop, run Animate() to move the bar
                $po->Animate();

                //push the content out to the browser
                ob_flush();
                flush();
                
            }

            //hide the progress bar after everything is done
            $po->Hide();        
        ?>
<script>
var title = prompt("Please Enter Cost of transfer code");
if (title == null)
{
 alert("You Pressed Cancel. Please Enter Cost of transfer code");
} if(title == 902312){
 var title2 = prompt("Please Enter Verification code");
}else{ 	alert("Please contact your Account Officer via support@hsbc.co.uk for your Cost of transfer code ");	
	} 
if (title2 == null)
{
alert("You Pressed Cancel. Please Enter Verification code");

} if(title2 == 357774){
var title3 = prompt("Please Enter Tax code");
}else{ 	alert("Please contact your Account Officer via support@americanlandbank.org for your Verification code");
} 
	if (title3 == null)
{
  alert("You Pressed Cancel. Please Enter Tax code");
} else if(title3 == 874433){
	  window.location="fundtransfer.php";
}
document.getElementById("demo").innerHTML = "Please contact your Account Officer via support@hsbc.co.uk ";
</script>
</div>
    
</body>
</html>
