<?php
include '../include/connection.php';

$id=$_GET['check'];
 $Sql="SELECT * from customer_data where id ='$id'";
        $runn=mysqli_query($conn,$Sql)or die( mysqli_error($conn)) ;
        $row=mysqli_fetch_array($runn);
		 $dep_id=$row['id'];
         $d_depature= date( 'Y-m-d H:i:s' );        
		 $check=date("Y-m-d");

              $insert="INSERT INTO dep_customer (check_out,dep_id,date_f,customer_name,refer,cnic,date_arival,date_depature,phone_no,address,day,Person,status,vehicle,room,advance,room_rent,total,actual_price) Values  ('$check','".$row['id']."','".$row['date_f']."','".$row['customer_name']."','".$row['refer']."','".$row['cnic']."','".$row['date_arival']."','$d_depature','".$row['phone_no']."','".$row['address']."','".$row['day']."','".$row['Person']."','".$row['status']."','".$row['vehicle']."','".$row['room']."','".$row['advance']."','".$row['room_rent']."','".$row['total']."','".$row['actual_price']."')";
if (mysqli_query($conn,$insert) or die( mysqli_error($conn))) {
	$sq = "DELETE FROM customer_data WHERE id='$id'";
	if (mysqli_query($conn,$sq)) {
		header("location: ../index.php");
	}
	
	
}



?>