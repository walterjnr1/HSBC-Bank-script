<?php
include('topbar.php');
if(empty($_SESSION['login_username']))
  {   
   header("Location: login.php"); 
   }
    //	session_start();
    	if(isset($_GET['id'])){
 
    	$id=$_GET['id'];
    	$em=$_GET['em'];
   		$status='1';
   
	 
    	$query=mysqli_query($conn,"select * from tblclient where auth_id='$id'");
    	$row=mysqli_fetch_array($query);
     //$email=$row['email'];
    // $fullname=$row['fullname'];
	
	 //verify expiry time
	 if(time() - $row['time_reg'] > 86400)
{
//$message='Verification Link Expired';
header("Location: link_expire.php?verification=failed&reason=Link Expired");    
	 
	}elseif($row['auth_id']==$id and $row['status']!==$status){
		
		
    		//activate account
    		mysqli_query($conn,"update tblclient set status='$status' where auth_id='$id'");
			
			
//Send Email
	

			
header("Location: index.php?verification=true&auth_id=$id");    
    	}
    	else{
    		header('location: index.php');
    	}
 }
?>
