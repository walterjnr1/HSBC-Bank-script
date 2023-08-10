<?php 
include 'header2.php'; 
if(empty($_SESSION['login_username']))
  {   
   header("Location: login.php"); 
   }
?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:25 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Customer Record|<?php echo $row_website['website_name'];   ?></title>
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

<!-- DataTables -->
<link rel="stylesheet" href="dist/plugins/datatables/css/dataTables.bootstrap.min.css">
<script type="text/javascript">
		function deldata(username){
if(confirm("ARE YOU SURE YOU WISH TO DELETE " + " " + username+ " " + " FROM THE LIST?"))
{
return  true;
}
else {return false;
}
	 
}

</script>
<script type="text/javascript">
function Activate(username){
if(confirm("ARE YOU SURE YOU WISH TO Activate " + " " + username+ " " + " ON THE LIST?"))
{
return  true;
}
else {return false;
}
	 
}

</script>
<script type="text/javascript">
function Deactivate(username){
if(confirm("ARE YOU SURE YOU WISH TO Deactivate " + " " + username+ " " + " ON THE LIST?"))
{
return  true;
}
else {return false;
}
	 
}

</script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #000000}
-->
</style>
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

    <p>
      <?php include 'header.php'; ?>
      
      <!-- Left side column. contains the logo and sidebar -->
      <?php include 'sidebar.php'; ?>
      
      <!-- Content Wrapper. Contains page content -->
       </p>  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Customer Record </h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Customer Record </li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="card m-t-3">
      <div class="card-body">
      <h4 class="text-black">Customer Record </h4>
      <p>&nbsp;</p>
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
		  
		  <thead class="bg-primary text-white">
               	  
            <tr>
			     <th ><div align="center"><span class="style1">#</span></div></th>
              <th><div align="center"><span class="style1">Photo</span></div></th>
              <th><div align="center"><span class="style1">Fullname</span></div></th>
			                <th><div align="center"><span class="style1">Password</span></div></th>
              <th><div align="center"><span class="style1">Phone </span></div></th>
              <th><div align="center"><span class="style1">Email </span></div></th>
              <th><div align="center"><span class="style1">State</span></div></th>
              <th><div align="center"><span class="style1">Country</span></div></th>
 <th><div align="center"><span class="style1">Account No.</span></div></th>
              <th><div align="center"><span class="style1">Balance</span></div></th>
              <th><div align="center"><span class="style1">Status</span></div></th>
              <th><div align="center"><span class="style1">Action</span></div></th>
            

            </tr>
          </thead>
          <tbody>
	  <?php 
                                     //     include '../connect.php';
                                          $sql = "SELECT * FROM customer order by ID ASC";
                                           $result = $conn->query($sql);
										$cnt=1;
                                           while($row = $result->fetch_assoc()) { ?>
            <tr>
               <td height="47"><div align="center"><?php echo $cnt; ?></div></td>
			                <td><div align="center"><span class="controls"><img src="<?php echo $row['photo'];?>"  width="50" height="43" border="2"/></span></div></td>
                        <td><div align="center"><?php echo $row['fullname']; ?></div></td>
                        <td><div align="center"><?php echo $row['password']; ?></div></td>
                        <td><div align="center"><?php echo $row['phone']; ?></div></td>
                        <td><div align="center"><?php echo $row['email']; ?></div></td>
						<td><div align="center"><?php echo $row['state']; ?></div></td>
                        <td><div align="center"><?php echo $row['country']; ?></div></td>
                        <td><div align="center"><?php echo $row['accountnumber']; ?></div></td>
                        <td><div align="center"><?php echo $row['balance']; ?></div></td>
						<td><div align="center">
                            <?php if($row['status']=="Inactive"){ ?>
                            <button type="button" class="btn btn-sm btn-outline-danger"><?php echo $row['status']; ?></button>
                          <?php } else {?>
                              <button type="button" class="btn btn-sm btn-outline-success"><?php echo $row['status']; ?></button>
                          <?php } ?>
                        </div></td>
			
                        <td><div align="center">
                            <?php if($row['status']=="Inactive")
{ ?>
                            <a href="Deactivate-activate-user.php?id=<?php echo $row['bankPIN'];?>" onClick="return Activate('<?php echo $row['username']; ?>');"><i class="fa fa-check" title="Activate Customer Account"></i> </a>
                          <?php } else {?>
                            <a href="Deactivate-activate-user.php?did=<?php echo $row['bankPIN'];?>" onClick="return Deactivate('<?php echo $row['username']; ?>');"><i class="fa fa-times" title="Deactivate Customer Account"></i> </a>
                          <?php } ?>
                        <a href="edit-customer.php?id=<?php echo $row['username'];?>" ><i class="fa fa-edit" title="Edit Customer Record"></i> </a> </div></td>
                      </tr>
                      <?php $cnt=$cnt+1;} ?>

          </tfoot>
        </table>
      </div>
      </div></div>
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
 
<script src="dist/plugins/popper/popper.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template --> 
<script src="dist/js/adminkit.js"></script>

<!-- DataTable --> 
<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script> 
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script src="dist/plugins/table-expo/filesaver.min.js"></script>
<script src="dist/plugins/table-expo/xls.core.min.js"></script>
<script src="dist/plugins/table-expo/tableexport.js"></script>
<script>
$("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
</script>
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:27 GMT -->
</html>
