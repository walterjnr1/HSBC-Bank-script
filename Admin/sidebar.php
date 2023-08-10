<?php 
include 'header2.php';
?>
<aside class="main-sidebar"> 
    <!-- sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="<?php echo $row_user['photo'];   ?>" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p><?php echo $row_user['fullname'];   ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="active"> <a href="index.php"> <i class="icon-home"></i> <span>Dashboard</span>  </a>
          
        </li>

		 <li class="treeview"> <a href="#"> <i class="fa fa-user-circle-o"></i> <span>User</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">

            <li><a href="add-user.php"><i class="fa fa-angle-right"></i>New User</a></li>
            <li><a href="user-record.php"><i class="fa fa-angle-right"></i>Manage User</a></li>
            <li><a href="edit-profile.php"><i class="fa fa-angle-right"></i>Edit Profile</a></li>
			<li><a href="changepassword.php"><i class="fa fa-angle-right"></i>Change Password</a></li>

          </ul>
        </li>
<li class="treeview"> <a href="#"> <i class="fa fa-user-plus"></i> <span>Customer(s)</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="createaccount.php"><i class="fa fa-angle-right"></i>Create Account</a></li>
			 </ul>
        </li>
       
		<li class="treeview"> <a href="#"> <i class="fa fa-envelope"></i><span>SMS</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="sms-single.php"><i class="fa fa-angle-right"></i> Single SMS</a></li>
            <li><a href="sms-bulk.php"><i class="fa fa-angle-right"></i> Bulk SMS</a></li>
			 <li><a href="sms-record.php"><i class="fa fa-angle-right"></i>Manage SMS</a></li>

          </ul>
        </li> 
		<li class="treeview"> <a href="#"> <i class="fa fa-envelope-o"></i><span>Transaction</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="credit.php"><i class="fa fa-angle-right"></i>Credit</a></li>
			 <li><a href="debit.php"><i class="fa fa-angle-right"></i>Debit</a></li>

          </ul>
        </li> 
		 <li class="treeview"> <a href="#"> <i class="fa fa-database"></i> <span>Records</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
			  <li><a href="customer-record.php"><i class="fa fa-angle-right"></i>Customer</a></li>
			  	<li><a href="transaction-record.php"><i class="fa fa-angle-right"></i>Transactions</a></li>
            <li><a href="activity-log.php"><i class="fa fa-angle-right"></i>Activity Log</a></li>
          </ul>
        </li>

       <li> 
	   <a href="website.php"> <i class="fa fa-desktop"></i> <span>Manage Websiste</span>  </a>
         
        </li>
				
		 <li> <a href="logout.php"> <i class="fa fa-sign-out"></i> <span>Logout</span>  </a>
      </ul>
    </div>
    <!-- /.sidebar --> 
  </aside>