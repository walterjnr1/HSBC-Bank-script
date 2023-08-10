<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include 'header2.php'; 
error_reporting(0);

if(empty($_SESSION['login_username']))
  {   
   header("Location: login.php"); 
   }


$username=$_SESSION['login_username'];
$sql = "select * from users where username ='$username'"; 
$result = $conn->query($sql);
$row1 = mysqli_fetch_array($result);

//Generate Account Number
function randomAccount() {
    $alphabet = "0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$account="30".randomAccount();

//Generate PIN Number
function GenereatePIN() {
    $alphabet = "0123456789ABCDEDFabceftyhZz";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 5; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
$pin=GenereatePIN();

if(isset($_POST["btn_save"]))
{

$fullname=$_POST['txtfullname'];
$username=$_POST['txtusername']; 
$password=$_POST['txtpassword']; 
$sex=$_POST['cmdsex']; 
$em=$_POST['txtemail'];
$phone=$_POST['txtphone']; 
$city=$_POST['txtcity']; 
$zip=$_POST['txtzip']; 
$dob = $_POST['txtdob'];
$question1='Nil';
$question2='Nil';
$answer1='Nil';
$answer2='Nil';
$status='Inactive';
$groupname='user';
$photo='uploadImage/default.jpg';
$company=$_POST['txtcompany']; 
$nextkin=$_POST['txtnextkin']; 
$state=$_POST['txtstate']; 
$country=$_POST['cmdcountry']; 
$bal=0;


//check if username already exist
$sql_u = "SELECT * FROM customer WHERE username='$username'";
//$sql_e = "SELECT * FROM users WHERE email='$email'";
$res_u = mysqli_query($conn, $sql_u);
//$res_e = mysqli_query($conn, $sql_e);
if (mysqli_num_rows($res_u) > 0) {
 $_SESSION['error']='Username Already Taken';	
 //}else if(mysqli_num_rows($res_e) > 0){
  	// $_SESSION['error']='Email Already Taken';	
}else{	


$sql1 = "INSERT INTO customer(username,password,bankPIN,fullname,sex,phone,email,DOB,city,state,country,nextkin,company,zip,question1,question2,answer1,answer2,datecreated,accountnumber,photo,groupname,status,balance)VALUES ('$username', '$password','$pin', '$fullname','$sex', '$phone','$em', '$dob','$city','$state', '$country','$nextkin', '$company','$zip','$question1', '$question2','$answer1', '$answer2', '$current_date','$account', '$photo','$groupname', '$status','$bal')";
 if ($conn->query($sql1) === TRUE) {
 
 $success ='Account Created Successfully with '.$website_name.' . Check your Email for verification Link. ';
 
	   
	   	  //send verication link via email


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
             <title>Account Verification |HSBC Bank UK</title>
             </head>
             <body>
             <img height='50' src=\"https://www.hsbcplc.org/Admin/uploadImage/logo.jpg\" width='90'>

				<p>Hello $fullname,</p>
                            <p>Your $website_name Online Account has been created Successfully But cannot be Logged until your account is activated.</p>

                            <p><strong>Account Number : </strong>$account</p>
							<p><strong>Username : </strong> $username</p>
							<p><strong>Password : </strong> $password</p>
							<p><strong>PIN : </strong> $pin</p>

							
				<p>Please click the link below to activate your account.</p>
				<h4><a href='https://www.hsbcplc.org/Admin/activate-account.php?id=$pin'>Click Here to Activate</a></h4>
				
				
				<p>NOTE: If your Account is NOT ACTIVATED in two weeks,Your account will be terminated from our database.</p>
							
							
							<p>Our 24/7 online banking offers secure services such as :</p>
							<p>Checking of Account Balance,</p>
							<p>Online Fund Transfer,</p>
							<p>Checking of Deposits,</p>
							<p>Changing of account details and much more</p>
							
							
		
                            <div>Thank you for visiting $website_name</div>
                        
                         
						 
						   <p><strong>Regards,</strong></p>                 
						 <p><strong>$website_name Team<strong></p>  
             </body>
             </html>
             ";
         
             //Content
             $mail->isHTML(true);                                  //Set email format to HTML
             $mail->Subject = 'Account Verification | HSBC Bank UK';
             $mail->Body    = $message;
         
             $mail->send();
           } catch (Exception $e) {
             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }




} else {
$error='Something Went Wrong';

}
}
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:22 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Customer Registration| <?php echo $row_website['website_name']; ?></title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $row_website['favicon'];   ?>">

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

    <?php include 'header.php'; ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'sidebar.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>&nbsp;</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i>New Customer</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row" align="center" >
 <?php if($success){?>
              <div class="alert alert-success" role="alert" align="center"> <?php echo ($success); ?></div>
              <?php } 
					else if($error){?>
              <div class="alert alert-danger" role="alert"> <?php echo ($error); ?></div>
              <?php } ?>        
      </div>
      <div class="row m-t-3">
       
        <div class="col-lg-8">
          <div class="card ">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Add New Customer </h5>
            </div>
            <div class="card-body">
              
             <form  action="" method="POST" enctype="multipart/form-data">
              <div class="row">
                
				
	 <div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Full Name</label>
                    <input class="form-control" name="txtfullname" value="<?php if (isset($_POST['txtfullname']))?><?php echo $_POST['txtfullname']; ?>" type="text">
					</div>
                </div>                 
                <div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">User Name</label>
                    <input class="form-control" name="txtusername" value="<?php if (isset($_POST['txtusername']))?><?php echo $_POST['txtusername']; ?>" type="text">
				    </div>
                </div>
                 <div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Passsword</label>
                    <input class="form-control" name="txtpassword" value="<?php
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 6; $i++) {
        $n = rand(0, $alphaLength);
       $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
echo randomPassword();
?>" readonly> 
				    </div>
                </div>
				 <div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Sex</label>
						<select name="cmdsex" id="gender" class="form-control" required="">
                                                    <option value=" ">--Select Gender--</option>
                                                     <option value="Male">Male</option>
                                                      <option value="Female">Female</option>
                                              </select>
											  				    </div>
                </div>
				 <div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Phone (Add country Code)</label>
                <input  name="txtphone" type="tel" class="form-control" value="<?php if (isset($_POST['txtphone']))?><?php echo $_POST['txtphone']; ?>" size="77" placeholder="Phone" required>
				   </div>
                </div>
				 <div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Email</label>
               <input  name="txtemail" type="email" class="form-control" value="<?php if (isset($_POST['txtemail']))?><?php echo $_POST['txtemail']; ?>" size="77" placeholder="Email Address" required>
          
				    </div>
                </div>
				
				<div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Date of Birth</label>
                    <input  name="txtdob" type="date" class="form-control" value="<?php if (isset($_POST['txtdob']))?><?php echo $_POST['txtdob']; ?>" size="77" required>
				    </div>
                </div>				
				<div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">City</label>
<input  name="txtcity" type="text" class="form-control" value="<?php if (isset($_POST['txtcity']))?><?php echo $_POST['txtcity']; ?>" size="77" placeholder="Enter City" required>
				    </div>
                </div>
				<div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">State</label>
<input  name="txtstate" type="text" class="form-control" value="<?php if (isset($_POST['txtstate']))?><?php echo $_POST['txtstate']; ?>" size="77" placeholder="Enter State" required>
				    </div>
                </div>
				<div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Country</label>
<select name="cmdcountry" id="cmdcountry" class="form-control" required="">
                                                      <option value="">----Select Country----</option>
                                                  <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
</select>
												  				    </div>
                </div>
				<div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Zip</label>
                    <input  name="txtzip" type="text" class="form-control" value="<?php if (isset($_POST['txtzip']))?><?php echo $_POST['txtzip']; ?>" size="77" placeholder="Enter Zip" required>
				    </div>
                </div>
				
				<div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Next of Kin</label>
                     <input  name="txtnextkin" type="text" class="form-control" value="<?php if (isset($_POST['txtnextkin']))?><?php echo $_POST['txtnextkin']; ?>" size="77" placeholder="Enter Next Of Kin" required>
				    </div>
                </div>
				<div class="col-md-10">
                  <div class="form-group has-feedback">
                    <label class="control-label">Company</label>
                                                 <input  name="txtcompany" type="text" class="form-control" value="<?php if (isset($_POST['txtcompany']))?><?php echo $_POST['txtcompany']; ?>" size="77" placeholder="Enter Company" required>
				    </div>
                </div>
                <div class="col-md-10">
                  <button type="submit" name="btn_save" class="btn btn-success">Create</button>
                </div>
				
                </div>
              </form>
           
            </div>
          </div>
        </div>
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
    function display_img(input){
        if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#logo-img').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
    }
	</script>
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
  	 <script>
    function display_img(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#logo-img').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
   
</script>
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:22 GMT -->
</html>
