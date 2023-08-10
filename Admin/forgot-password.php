<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include 'header2.php'; 
if(empty($_SESSION['login_username']))
  {   
   header("Location: login.php"); 
   }
   
if(isset($_POST['btn_forgot']))
{
$otp = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8);

$text_email=$_POST['txtemail'];

$sql = "SELECT * FROM users where email ='".$text_email."' " ;
$ans = $conn->query($sql);
$res=mysqli_fetch_array($ans);
   $realemail=$res['email'];
  $firstname=$res['firsname'];  
  //$username = $res['username'];


if($text_email == $realemail){
$sql2 = "UPDATE users SET password ='$otp' WHERE email='$text_email'";
$ans1 = $conn->query($sql2);
 }else if ($ans1){

 
//send New Password  via email 
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
    $mail->addAddress($realemail);     //Add a recipient
    //Attachments
    //$mail->addAttachment('assets/logo.jpeg');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    $message = "
    <html>
    <head>
    <title>Forgot Password |HSBC Bank UK</title>
    </head>
    <body>
    <img height='50' src=\"https://www.hsbcplc.org/Admin/uploadImage/logo.png\" width='90'>
    <p>Hello ".$firstname." ,</p>
                            <p>Your New Password is : ".$otp_pass." </p>
									
						   <p>Regards,</p>                 
						 <p>".$row_website['website_name']."</p>     
    </body>
    </html>
    ";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Forgot Password  | HSBC Bank UK';
    $mail->Body    = $message;

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
		
		    header("Location: index.php"); 

		}else{
 $error = ' Problem Retrieving Password  ';
		}
		}
		//}
?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/star-admin-free/jquery/src/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 12:43:45 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Forgot Password|<?php echo $row_website['website_name'];   ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">

    <!-- endinject -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $row_website['favicon'];   ?> ">
</head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
    <form action="" method="post">
                  <div class="form-group">
				  <?php if($success){?>
          <div class="alert alert-success" role="alert" align="center">  <?php echo ($success); ?></div>
		  <?php } 
					else if($error){?>
           <div class="alert alert-danger" role="alert">  <?php echo ($error); ?></div>
 <?php } ?>
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input type="text" name="txtemail" class="form-control" placeholder="Email Addres">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>                        </span>                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block" name="btn_forgot">Request New Password</button>
                  </div>
                </form>
              <strong><a href="index.php">Back</a></strong></div>
              <ul class="auth-footer">
                <li></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../assets/js/shared/off-canvas.js"></script>
    <script src="../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="../../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>

<!-- Mirrored from www.bootstrapdash.com/demo/star-admin-free/jquery/src/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 12:44:55 GMT -->
</html>