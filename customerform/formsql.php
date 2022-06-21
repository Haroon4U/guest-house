  <?php
include "../include/connection.php";
if (isset($_POST['save'])) {
  $date=date('Y/m/d');
  $name = $_POST['Name'];
  $cnic = $_POST['cnic'];
  $refer=$_POST['refer'];
  $day=$_POST['day'];
  $d_arrival=$_POST['date_arival'];
  $address = $_POST['address'];
  $phone = $_POST['cell_No'];
  #issue room_no
  $room_no = $_POST['room'];
  $person = $_POST['person'];
  $status=$_POST['status'];
  $car=$_POST['car'];
  $advance = $_POST['advance'];
  $price=$_POST['room_rent']; 
  $total=$price*$day;

$insert="INSERT INTO customer_data (date_f,customer_name,refer,cnic,date_arival,phone_no,address,day,Person,status,vehicle,room,advance,room_rent,total,actual_price) VALUES ('$date','$name','$refer','$cnic','$d_arrival','$phone','$address','$day','$person','$status','$car','$room_no','$advance','$price','$total','$total')";
  if (sqlsrv_query($conn,$insert)) {
  			// echo "<script>window.open('../index.php','_self'); alert('your data will be save');</script>";
  	echo "string";
  }

 } 
 ?>
