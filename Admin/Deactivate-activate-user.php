<?php include 'header2.php'; 

if(empty($_SESSION['login_username']))
    {   
    header("Location: index.php"); 
    }
    else{
	 // for activate customer   	
if(isset($_GET['id']))
{
//$id=intval($_GET['id']);
$id=($_GET['id']);

mysqli_query($conn,"update customer set status='Active' where bankPIN='$id'");
header("location: customer-record.php");
}

// for Deactivate customer
if(isset($_GET['did']))
{
//$did=intval($_GET['did']);
$did=($_GET['did']);

mysqli_query($conn,"update customer set status='Inactive' where bankPIN='$did'");
header("location: customer-record.php");
}
}
?>