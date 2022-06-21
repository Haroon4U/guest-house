<?php 
include "../include/connection.php";
    if (isset($_POST['save'])) {

    	$edit_id=$_GET['id'];   
        $days=$_POST['day'];
     //    $refer=$_POST['refer'];
    	// $name = $_POST['Name'];
     //    $cnic = $_POST['cnic'];
     //    $d_arrival= $_POST['date_arival'];
     //    $address = $_POST['address'];
     //    $phone = $_POST['cell_No'];
     //    $room_no = $_POST['room'];
     //    $person = $_POST['person'];
     //    $status=$_POST['status'];
        $car= isset($_POST['car']) ? $_POST['car'] : '';
        // $advance = $_POST['advance'];
        $price=$_POST['room_rent'];
        $total=$price* $days;

        $update="UPDATE customer_data SET customer_name='".$_POST['Name']."',refer='".$_POST['refer']."',cnic='".$_POST['cnic']."',date_arival='".$_POST['date_arival']."',phone_no='".$_POST['cell_No']."',address='".$_POST['address']."',day='".$_POST['day']."',Person='".$_POST['person']."',status='".$_POST['status']."',vehicle='$car',room='".$_POST['room']."',advance='".$_POST['advance']."',room_rent='".$_POST['room_rent']."',total='$total',actual_price='$total' WHERE id='$edit_id'";
        
        if (mysqli_query($conn,$update)) 
        {
                   $query="SELECT * FROM customer_data WHERE id='".$_GET['id']."'";
                   $run=mysqli_query($conn,$query);
                   $row=mysqli_fetch_array($run) ;
                   $id=$row['id'];
            echo "<script>window.open('../detail/detail.php?info=$id','_self');alert('Your data will update ')</script>";
        // header("location:seemore.php");
        // Header('Refresh:2;url=more.php');
              
        }

  
  }
 ?>