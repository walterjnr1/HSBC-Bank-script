<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include 'header2.php'; 

    //	session_start();
    	if(isset($_GET['id'])){
 
    	$id=$_GET['id'];
     $st='Active';
     
    	$query=mysqli_query($conn,"select * from customer where bankPIN='$id'");
    	$row=mysqli_fetch_array($query);
     $email=$row['email'];
     $fullname=$row['fullname'];
    	if($row['bankPIN']==$id and $row['status']!==$st){
    		//activate account
    		mysqli_query($conn,"update customer set status='Active' where bankPIN='$id'");
     header("Location: ../index.php?Activation=true");    


 //send activation status via email 
 $mail = new PHPMailer(true);
 try {
     //Server settings
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'hsbcplc.org';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'info@hsbcplc.org';                     //SMTP username
     $mail->Password   = 'hsbc@@2023';                               //SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
     //Recipients
     $mail->setFrom('info@hsbcplc.org', 'HSBC Bank UK');
     $mail->addAddress($em);     //Add a recipient
     //Attachments
     //$mail->addAttachment('assets/logo.jpeg');         //Add attachments
     //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
 
     $message = "
     <html>
     <head>
     <title>Account Activation |HSBC Bank UK</title>
     </head>
     <body>
     <img height='50' src=\"https://www.hsbcplc.org/Admin/uploadImage/logo.jpg\" width='90'>
     <p>Hello $fullname ,</p>
     <p>Your Account Has been Activated Successfully. </p>

         <div>Thank you for choosing Us. </div>
     
         <p><strong>Regards,</strong></p>                 
         <p><strong>$website_name Team<strong></p> 
     </body>
     </html>
     ";
 
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Account Activation |HSBC Bank UK';
     $mail->Body    = $message;
 
     $mail->send();
   } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }



    	}else{
    	       header("Location: ../index.php?Activation=Account Was Activated Already");    
    	}
    	}
    	else{
    	       header("Location: ../index.php?Activation=Problem Activating Account");    
    	}
 
?>
<link rel="stylesheet" href="popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Success</strong> 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Error</strong> 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>
