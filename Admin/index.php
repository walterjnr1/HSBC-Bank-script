<?php 
include 'header2.php'; 
if(empty($_SESSION['login_username']))
  {   
   header("Location: login.php"); 
   }

$sql = "SELECT * FROM users ";
$result = $conn->query($sql);
$row_u = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:30:44 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Dashboard| <?php echo $row_website['website_name'];   ?></title>
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
      <h1> Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Dashboard</li>
      </ol>
    </div>
  
    <!-- Main content -->
    <div class="content">
      <div class="row">
       <div class="col-xl-5 col-lg-3 col-md-3 col-sm-6 m-b-3">
          <div class="card">
            <div class="card-body">
              <div class="m-b-1"> <i class="icon-desktop f-30 text-blue"></i> <span class="pull-right text-muted">IP Address</span> </div>
              <div class="info-widget-text row">
                <div class="col-sm-12 pull-right text-right text-blue f-25"><h6><?php echo $row_u['last_ip'];  ?></h6></div>
              </div>
            </div>
          </div>
        </div>
		
        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-6 m-b-3">
          <div class="card">
            <div class="card-body">
              <div class="m-b-1"> <i class="icon-login f-30 text-blue"></i> <span class="pull-right text-muted">Last Login</span> </div>
              <div class="info-widget-text row">
                <div class="col-sm-12 pull-right text-right text-blue f-25"><h6><?php echo $row_u['lastaccess'];  ?></h6></div>
              </div>
            </div>
          </div>
        </div>
       <?php
	  
	   
$stmt = $dbh->prepare("SELECT count(*) FROM customer");
$stmt->execute([]);
$count_customer = $stmt->fetchColumn();   
?>
		 <div class="col-lg-4">
          <div class="tile-progress tile-brown">
            <div class="tile-header">
              <h5>Total Customer(s) </h5>
            </div>
            <div class="tile-progressbar"> <span data-fill="65.5%" style="width: 65.5%;"></span> </div>
            <div class="tile-footer">
              <h4> <span class="pct-counter"><?php echo $count_customer; ?></span> </h4>
            </div>
          </div>
        </div>

<?php
 $stmt = $dbh->prepare("SELECT count(*) FROM users");
$stmt->execute([]);
$count_users= $stmt->fetchColumn();   
?>
		 <div class="col-lg-4">
          <div class="tile-progress tile-pink">
            <div class="tile-header">
              <h5>Total User(s) </h5>
            </div>
            <div class="tile-progressbar"> <span data-fill="65.5%" style="width: 65.5%;"></span> </div>
            <div class="tile-footer">
              <h4> <span class="pct-counter"><?php echo $count_users; ?></span> </h4>
            </div>
          </div>
        </div>

			
		<?php
	   
$cdate=date("m");
$stmt = $dbh->prepare("SELECT sum(transfer_amt) FROM tbltransaction  ");
$stmt->execute([]);
$count_amt = $stmt->fetchColumn();   
?>

        <div class="col-lg-4">
          <div class="tile-progress tile-red">
            <div class="tile-header">
              <h5>Total Transaction </h5>
            </div>
            <div class="tile-progressbar"> <span data-fill="70%" style="width: 70%;"></span> </div>
            <div class="tile-footer">
			              <h4> <span class="pct-counter">$<?php echo number_format((float) $count_amt ,2); ?></span> </h4>
            </div>
          </div>
        </div>
 
		
  
      </div>
      <!-- /.row -->
      
      <div class="row"></div>
      <!-- /.row -->
      
      <div class="row"></div>
      <!-- /.row -->
      
      <div class="row"></div>
      <!-- /.row --> 
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

<!-- Morris JavaScript --> 
<script src="dist/plugins/raphael/raphael-min.js"></script> 
<script src="dist/plugins/morris/morris.js"></script> 
<script src="dist/plugins/functions/dashboard1.js"></script> 

<!-- Chart Peity JavaScript --> 
<script src="dist/plugins/peity/jquery.peity.min.js"></script> 
<script src="dist/plugins/functions/jquery.peity.init.js"></script>
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:31:31 GMT -->
</html>
