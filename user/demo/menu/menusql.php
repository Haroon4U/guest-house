<?php

include '../include/connection.php';
if (isset($_POST['save'])) {
 $bill=$_POST['quanity'] * $_POST['food_price'];
 $insert="INSERT INTO menu (seril_no,day_time,eat_time,food,quanity,food_price,food_bill) VALUES ('".$_POST['a']."','".$_POST['day']."','".$_POST['eat']."','".$_POST['food']."','".$_POST['quanity']."','".$_POST['food_price']."','$bill')";
  if (mysqli_query($conn,$insert)) {
  	        	$query="SELECT * FROM customer_data WHERE id='".$_POST['a']."'";
                   $run=mysqli_query($conn,$query);
                   $row=mysqli_fetch_array($run);
                   $id=$row['id'];
  echo "<script>window.open('../detail/detail.php?info=$id','_self'); alert('your data will save');</script>";
  }
}

 ?>