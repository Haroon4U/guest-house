<?php 
include "../include/connection.php";

if (isset($_POST['checkout'])) 
{
	$getid=$_GET['id'];
    $query="SELECT * FROM customer_data WHERE id='".$_GET['id']."'";
    $run=sqlsrv_query($conn,$query);   
    $row=sqlsrv_fetch_array($run) ;
    $id=$row['id'];
    $actual=$row['actual_price'];
    $total=$row['room_rent'] * $_POST['day'];
    $discount=$_POST['discount'];
	$sellingprice=$actual - ($actual * ($discount / 100));
	     $update="UPDATE customer_data SET customer_name='".$_POST['name']."',date_depature='".$_POST['d_date']."',room='".$_POST['room_no']."',day='".$_POST['day']."',advance='".$_POST['advance']."',total='$sellingprice',discount='$discount',actual_price='$total' WHERE id='$getid'";

        if (sqlsrv_query($conn,$update)) 
        {

            $Sql="SELECT * from customer_data where id ='$id'";
                    $runn=sqlsrv_query($conn,$Sql)or die( sqlsrv_error($conn)) ;
                    $row=sqlsrv_fetch_array($runn);
                     $d_depature= date( 'Y-m-d H:i:s' );        
                     $check=date("Y-m-d");

              $insert="INSERT INTO dep_customer (check_out,dep_id,date_f,customer_name,refer,cnic,date_arival,date_depature,phone_no,address,day,Person,status,vehicle,room,advance,room_rent,total,discount,actual_price) Values  ('$check','".$row['id']."','".$row['date_f']."','".$row['customer_name']."','".$row['refer']."','".$row['cnic']."','".$row['date_arival']."','$d_depature','".$row['phone_no']."','".$row['address']."','".$row['day']."','".$row['Person']."','".$row['status']."','".$row['vehicle']."','".$row['room']."','".$row['advance']."','".$row['room_rent']."','".$row['total']."','".$row['discount']."','".$row['actual_price']."')";

            if (sqlsrv_query($conn,$insert) or die( sqlsrv_error($conn))) {
                $sq = "DELETE FROM customer_data WHERE id='$id'";
                if (sqlsrv_query($conn,$sq)) {
                    header("location: ../index.php");
                }
                
                
            }
              
        }
}
elseif(isset($_POST['save'])) 
{
    $getid=$_GET['id'];
    $query="SELECT * FROM customer_data WHERE id='".$_GET['id']."'";
    $run=sqlsrv_query($conn,$query);   
    $row=sqlsrv_fetch_array($run) ;
    $id=$row['id'];
    $actual=$row['actual_price'];
    $room=$row['room_rent'];
    $total=$room * $_POST['day'];

    $discount=$_POST['discount'];
    $sellingprice=$actual - ($actual * ($discount / 100));
         $update="UPDATE customer_data SET customer_name='".$_POST['name']."',date_depature='".$_POST['d_date']."',room='".$_POST['room_no']."',day='".$_POST['day']."',advance='".$_POST['advance']."',discount='$discount',total='$sellingprice',actual_price='$total' WHERE id='$getid'";
        if (sqlsrv_query($conn,$update)) 
        {

                   $query="SELECT * FROM customer_data WHERE id='".$_GET['id']."'";
                   $run=sqlsrv_query($conn,$query);
                   $row=sqlsrv_fetch_array($run) ;
                   $id=$row['id'];
        echo "<script>window.open('bill.php?bill=$id','_self')</script>";
        }

}

 ?>