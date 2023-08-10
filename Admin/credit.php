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
   $username=$_SESSION['login_username'];

   $sql = "select * from users where username ='$username'"; 
$result = $conn->query($sql);
$row1 = mysqli_fetch_array($result);
   
if(isset($_POST["btncredit"]))
{
$customer=$_POST['cmdusername'];
$transferamount=$_POST['txttransferamount'];

$sql = "select * from customer WHERE username='$customer'"; 
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

$Transfer_fullname=$row['fullname'];		
$Transfer_email=$row['email'];			

			
$admin_PIN = $row['bankPIN'];
$balance=$row['balance'];

// generate OTP
$otp = rand(100000,999999);

$operation='Credit';
$depositor=$row1['fullname'];

//save transaction details
$query = "INSERT into `tbltransaction` (username,transfer_amt, depositor,transferdate,operation)
VALUES ('$customer','$transferamount', '$depositor', '$current_date', '$operation')";

    $result = mysqli_query($conn,$query);
      if($result){
	
	
//update balance
 $q1="UPDATE `customer` SET `balance`=('$balance' + $transferamount) where username = '$customer'";
 
if ($conn->query($q1) === TRUE) {

//Get current balance
$sql1 = "select * from customer WHERE username='".$customer."'"; 
$result1 = $conn->query($sql1);
$row = mysqli_fetch_array($result1);

$Transfer_balance= "$".number_format((float)$row['balance'] ,2);

$transferamount= "$".number_format((float)$transferamount ,2);

  
//send debit balance via email
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
    $mail->addAddress($Transfer_email);     //Add a recipient
    //Attachments
    //$mail->addAttachment('assets/logo.jpeg');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    $message = "
    <html>
    <head>
    <title>Credit Transaction |HSBC Bank UK</title>
    </head>
    <body>
    <img height='50' src=\"https://www.hsbcplc.org/Admin/uploadImage/logo.png\" width='90'>

    <p><strong>Dear ".$Transfer_fullname." ,</strong></p>
    <div>Your Account Has been Credited With <strong>$transferamount</strong> on $current_date</div>
             <p><strong>Your Balance is : </strong>".$Transfer_balance."
              <p>&nbsp;</p>
              
             <div>Thank you for visiting $website_name </div>
          
 

 <p><strong>Regards,</strong></p>                                  
     <p><strong>$website_name Team.</strong></p>     
    </body>
    </html>
    ";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Credit Transaction | HSBC Bank UK';
    $mail->Body    = $message;

    $mail->send();
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



	  $success='Credit Transaction Was Successful ';

    }
	}
	

else {
 $error=' Credit Transaction  Was Not Successful, Please Try again';
  }
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:22 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Credit Customer|<?php echo $row_website['website_name'];   ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $row_website['favicon'];   ?> ">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">

<!-- form wizard -->
<link rel="stylesheet" href="dist/plugins/formwizard/jquery-steps.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

    <p>
      <?php include 'header.php'; ?>
      
      <!-- Left side column. contains the logo and sidebar -->
      <?php include 'sidebar.php'; ?>
      
      <!-- Content Wrapper. Contains page content -->
       </p>
    <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
	
    <div class="content-header sty-one">
      <h1>Credit customer</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Credit customer</li>
      </ol>
    </div>
    			<?php if($success){?>
          <div class="alert alert-success" role="alert" align="center">  <?php echo ($success); ?></div>
		  <?php } 
					else if($error){?>
           <div class="alert alert-danger" role="alert">  <?php echo ($error); ?></div>
 <?php } ?>
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Credit customer</h5>
            </div>
            <div class="card-body">
                                <form role="form" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Customer</label>
 <select name="cmdusername" id="select" class="form-control" required="">
    <option value = "">---Select Customer---</option>
    <?php
    $queryusers = "SELECT * FROM `customer` ";
    $db = mysqli_query($conn,$queryusers);
    while ( $d=mysqli_fetch_assoc($db)) {
       echo "<option value='".$d['username']."'>".$d['fullname']."</option>";
	   
    }
    ?>
      </select>                </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Amount</label>
<input type="text"  value=""  name="txttransferamount" class="form-control" size="77" id="txtamt" placeholder="Amount"required="" />
              </div>
              
             
              <button type="submit" name="btncredit" class="btn btn-success">Credit </button>
            </form>
            </div>
          </div>
        </div>
     
      </div>
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
 <footer class="main-footer">
    <div class="pull-left hidden-xs"><?php include'footer.php';  ?>.</footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/adminkit.js"></script>

<!-- form wizard --> 
<script src="dist/plugins/formwizard/jquery-steps.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script> 
<script>
    var frmRes = $('#frmRes');
    var frmResValidator = frmRes.validate();
	
    var frmInfo = $('#frmInfo');
    var frmInfoValidator = frmInfo.validate();

    var frmLogin = $('#frmLogin');
    var frmLoginValidator = frmLogin.validate();

    var frmMobile = $('#frmMobile');
    var frmMobileValidator = frmMobile.validate();

    $('#demo1').steps({
      onChange: function (currentIndex, newIndex, stepDirection) {
        console.log('onChange', currentIndex, newIndex, stepDirection);
        // tab1
        if (currentIndex === 0) {
          if (stepDirection === 'forward') {
            var valid = frmRes.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmResValidator.resetForm();
          }
        }
		
		// tab2
        if (currentIndex === 1) {
          if (stepDirection === 'forward') {
            var valid = frmInfo.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmInfoValidator.resetForm();
          }
        }

        // tab3
        if (currentIndex === 2) {
          if (stepDirection === 'forward') {
            var valid = frmLogin.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmLoginValidator.resetForm();
          }
        }

        // tab4
        if (currentIndex === 3) {
          if (stepDirection === 'forward') {
            var valid = frmMobile.valid();
            return valid;
          }
          if (stepDirection === 'backward') {
            frmMobileValidator.resetForm();
          }
        }

        return true;

      },
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script> 
<script>
    $('#demo').steps({
      onFinish: function () {
        alert('Wizard Completed');
      }
    });
  </script>
</body>
</html>
