<?php
error_reporting(0);
include('topbar.php');

if(isset($_POST['btnlogin']))
{
if($_POST['txtusername'] != "" || $_POST['txtpassword'] != ""){

$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
$status = 'Active';

$sql = "SELECT * FROM `customer` WHERE `username`=? AND `password`=? AND `status`=?";
			$query = $dbh->prepare($sql);
			$query->execute(array($username,$password,$status));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
			
		$_SESSION['login_username'] = $fetch['username'];
		$_SESSION['login_id'] = $fetch['ID'];

//save activity log details
$fullname=$fetch['fullname'];
$task= $fullname.' '.'Logged In'.' '. 'On' . ' '.$current_date;

$sql = 'INSERT INTO activity_log(task) VALUES(:task)';
$statement = $dbh->prepare($sql);
$statement->execute([
	':task' => $task
]);

header("Location: customer/index.php");

} else{
$message = ' <div class="alert alert-danger">Invalid Username/Password</div> ';

}
}else{
$message = ' <div class="alert alert-danger"> Must Fill-in All Fields  </div> ';
}
}


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login15.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 19:01:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer login Form|<?php echo $website_name ;?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme15.css">
	  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $favicon; ?>">

</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.php">
                <div class="logos"></div>
          </a>
      </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>&nbsp;</h3>
              </div>
            </div>
           <div class="form-holder">
                <div class="form-content">
                    <div class="form-items"><h4 ><?php echo $message; ?></h4>
                      <p align="center" ><a href="index.php"><span class="logos"><img class="logo-size" src="<?php echo $logo; ?>" alt="" height="110" width="360"></span></a></p>
                      <h3><?php echo $website_name ;?> - Login Form</h3>
                        <p>&nbsp;</p>
                        <p> </p>
                       
                       		             <form  action="" method="POST"  class="registration-form">
                            <input class="form-control" type="text" name="txtusername" placeholder="username" required>
                            <input class="form-control" type="password" name="txtpassword" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" name="btnlogin" type="submit" class="ibtn">Login</button> 
                            </div>
                        </form>
                        
                    </div>
                </div>
          </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login15.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 May 2022 19:01:53 GMT -->
</html>