
<?php 
session_start();
include "../include/connection.php";
if (isset($_POST['submit'])) {
	$client_email=$_POST['email'];
	$client_pwd=$_POST['passward'];
	$admin="SELECT * from client where client_email='$client_email' and client_password='$client_pwd'";
    $adrun=mysqli_query($conn,$admin) or die (mysqli_error($conn));
    $data=mysqli_fetch_assoc($adrun);
	$role=$data['role_id'];
	if ($role ==1) 
	{
	    $_SESSION['client_name']=$data['client_name'];
		$_SESSION['client_email']=$client_email;
        echo "<script>window.open('../index.php','_self');alert('Welcome admin Margalla Guest house ')</script>";
	}
	else if($role ==2)
	{
	    $_SESSION['client_name']=$data['client_name'];
		$_SESSION['client_email']=$client_email;
	        echo "<script>window.open('../user/demo/index.php','_self');alert('Welcome to Margalla Guest house ')</script>";
	}
	else
  {

   echo "<script>window.open('admin.php','_self');alert('User Name or Password is incorrect!')</script>";
  }
}

 ?>