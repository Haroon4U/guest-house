<?php 
include '../include/connection.php';
$bill=$_GET['bill'];
    $sql="select * from customer_data  where id = '$bill' ";
    $runn=sqlsrv_query($conn,$sql) or die( sqlsrv_error($conn));
    $row=sqlsrv_fetch_array($runn);
     // $car=$row['vehicle'];
     $advance=$row['advance'];
     $room_rent=$row['room_rent'];
     $total=$row['total'];?>
<!DOCTYPE html>
<html>
<head>
	<title>Bill</title>
		<meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--link connect to bootstrap & css  -->
        <link rel="stylesheet" type="text/css" href="../bootstrap4/css/bill.css">
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <!--link connect to bootstrap & javascript  -->
</head>
<body class="container text-monospace">
    <div class="text-center" style="font-size: x-large;">
                <h1>Margalla view</h1>
                <h2>Guest house</h2>
    </div>
                <div>
                <h3 class="bill"><small>House No 29 St#32 f-6/1</small></h3>
                <h3 class=""><small>Islamabad</small></h3>
                <h3 class="bill"><small>Ph# 051-26042-10</small></h3>
            </div>
<div class="container">
    <div class="row">
        <header class="col-sm-12 col-xl-12 col-md-12">
            <br>
            <div class="">
              <ul class="float list-group" style="font-size: x-large;">
                
                   <li class="list-group-item"><span class="font-weight-bold">From:</span> <?php echo date('m/d/y h:i A',strtotime($row['date_arival'])); ?></li>
                   <li class="list-group-item"><span class="font-weight-bold">To:</span> <?php echo date('m/d/y h:i A',strtotime($row['date_depature'])); ?></li>
              </ul>
            </div>
            <div style="font-size: x-large;">
                <h3>Bill_to</h3>
                 <ul class=" mar list-group">
                  <h3>
                  <small>
                    <li class="list-group-item"><span class="font-weight-bold">Name:</span><?php echo $row['customer_name'] ?></li>
                    <li class="list-group-item"><span class="font-weight-bold">Cnic:</span><?php echo $row['cnic']; ?></li>
<!--                     <li class="list-group-item"><span class="font-weight-bold">Vehicle:</span> <?php echo $car; ?></li> -->
                    <li class="list-group-item"><span class="font-weight-bold">Room_No:</span> <?php echo $row['room']; ?></li>
                    <li class="list-group-item"><span class="font-weight-bold">Days:</span> <?php echo $row['day']; ?></li>
                  </small>
                       
                  </h3>
              </ul>
            </div>
        </header>
        <div class="col-sm-6 col-xl-6 col-md-6">

        </div>
    </div>
</div>
<br>
	<section class="container">
        <table class="table table-bordered ">
              <thead style="font-size: x-large;">
                <tr >
                  <th class="font-weight-bold">Date/Time</th>
                  <th class="font-weight-bold">Eating_Time</th>
                  <th class="font-weight-bold">Quanity</th>
                  <th class="font-weight-bold">Item</th>
                  <th class="font-weight-bold">Actual_p</th>
                  <th class="font-weight-bold">Total_bill</th>
                </tr>
              </thead>
              <tbody style="font-size: x-large;">
                <?php
     $mor=$_GET['bill'];
      $sel="select * from menu where seril_no='$mor'";
      $run1=sqlsrv_query($conn,$sel);

 while ($data=sqlsrv_fetch_array($run1)) {
                 $day=$data['day_time'];
         $eat=$data['eat_time'];
         $qua=$data['quanity'];
         $food=$data['food'];
         $food_p=$data['food_price'];
         $food_bill=$data['food_bill'];
                 ?>
                  <tr>
                      <td><?php echo date('m/d/y h:i A',strtotime($day)); ?></td>
                      <td><?php echo $eat; ?></td>
                      <td><?php echo $qua; ?></td>
                      <td><?php echo $food; ?></td>
                      <td><?php echo $food_p; ?></td>
                      <td><?php echo $food_bill; ?></td>
                  </tr>
              <?php } ?>
              </tbody>            
        </table>
        <table class="table table-bordered ">
            <thead>
                <tr style="font-size: x-large;">
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody style="font-size: x-large;"><?php 
            $que="select * from customer_data inner join menu on customer_data.id = menu.seril_no where seril_no='$mor'";
            $ru=sqlsrv_query($conn,$que);
            $item_bill=0;
            while ($sta=sqlsrv_fetch_array($ru)) {
            $item =$sta['food_bill'];
             $item_bill =$item_bill +$item; 
            }

            $bill=$total +$item_bill;
            $due=$bill-$advance;



            
            ?>
                <tr>
                    <td >Room_rent</td>
                    <td><?php echo $room_rent."*".$row['day']."=".$total; ?></td>
                </tr>
                <tr>
                    <td>Food_bill</td>
                    <td><?php echo $item_bill; ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?php echo $bill; ?></td>
                </tr>
                <tr>
                    <td>Advace</td>
                    <td><?php echo $advance; ?></td>
                </tr>
                <tr>
                    <td>Due_Amount</td>
                    <td><?php echo $due; ?></td>
                </tr>  
            </tbody>
        </table>
	</section>

  <div class="row">
    
    <br>
    <div class="col-sm-5">
      <h2 style="margin:23px;">Manager Sign..</h2><span></span>
      <br>
      <br>
      <hr>
    </div>
  </div>
  <br>
  <br>
    <footer class="text-center">
        <p>Thanks for visiting....</p>
    </footer>
</body>
</html>