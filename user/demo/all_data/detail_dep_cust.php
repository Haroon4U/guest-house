<?php
include '../include/connection.php';
 $detail=$_GET['detail'];
    $sql="select * from dep_customer  where  dep_id = '$detail' ";
    $runn=mysqli_query($conn,$sql) or die( mysqli_error($conn));
    $data=mysqli_fetch_array($runn);
          $name_dep=$data['customer_name'];
         $date_dep=$data['date_f'];
         $day_dep=$data['day'];
         $refer_dep=$data['refer'];
         $d_arival_dep=$data['date_arival'];
         $d_depature_dep=$data['date_depature'];
         $cnic_dep=$data['cnic'];
         $cell_dep=$data['phone_no'];
         $address_dep=$data['address'];
         $person_dep=$data['Person'];
         $status_dep=$data['status'];
         $car_dep=$data['vehicle'];
         $advance_dep=$data['advance'];
         $room_rent_dep=$data['room_rent'];
         $room_no_dep=$data['room'];
         $total_dep=$data['total'];
;
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bill</title>
	<meta charset="utf-8"/>
  <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--link connect to bootstrap & css  -->
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
        <style>
          .a
          {
            color: black !important;
            text-decoration: none!important;
          }.table td, .table th {
            padding: 10px !important;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
         }
         .bold
         {
          font-weight: bold!important;
         }
        </style>		
</head>
<body>
 <div>
  <div>
  <div class="text-monospace">
     <div>
    <h1 class="text-center"><?php echo "$name_dep"; ?></h1>
    <hr>
     </div>
  </div>
  <div class="row">

      <div class="col-sm-6">
       <ul class="list-group list-group-flush">
           <li class="list-group-item"><span class="bold">Refrance:</span><?php echo $refer_dep; ?> </li>
           <li class="list-group-item"><span class="bold">Cnic/passport:</span><?php echo $cnic_dep; ?></li>
           <li class="list-group-item"><span class="bold">D_arrival:</span><?php echo date('m/d/y h:i A',strtotime($d_arival_dep)); ?></li>
           <li class="list-group-item"><span class="bold">Address:</span><?php echo $address_dep; ?></li>
           <li class="list-group-item"><span class="bold">Days:</span><?php echo $day_dep ?></li>
           <li class="list-group-item"><span class="bold">Person:</span><?php echo $person_dep; ?></li>
           <li class="list-group-item"><span class="bold">Status:</span><?php echo $status_dep; ?></li>
           <li class="list-group-item"><span class="bold">Vehicle_no:</span><?php echo $car_dep; ?></li>
       </ul>
  </div>
  <div class="col-sm-6">
       <ul class="list-group list-group-flush">
           <li class="list-group-item"><span class="bold">Contact:</span><?php echo $cell_dep; ?></li>
           <li class="list-group-item"><span class="bold">Room_no:</span><?php echo $room_no_dep; ?></li>
           <li class="list-group-item"><span class="bold">D_depature:</span><?php echo date('m/d/y h:i A',strtotime($d_depature_dep)); ?></li>
           <li class="list-group-item"><span class="bold">Room_rent:</span><?php echo $room_rent_dep; ?></li>
           <li class="list-group-item"><span class="bold">Advance:</span><?php echo $advance_dep; ?></li>
           <li class="list-group-item"><span class="bold">Total_Rent:</span><?php echo $total_dep; ?></li>
       </ul>
  </div>
  </div>
  </div>
 </div>
        <div class="col-sm-6 col-xl-6 col-md-6">

        </div>
    </div>
</div>
<br>
	<section class="container">
        <table class="table table-bordered ">
              <thead>
                <tr>
                  <th class="font-weight-bold">Date/Time</th>
                  <th class="font-weight-bold">Eating_Time</th>
                  <th class="font-weight-bold">Quanity</th>
                  <th class="font-weight-bold">Item</th>
                  <th class="font-weight-bold">Actual_p</th>
                  <th class="font-weight-bold">Total_bill</th>
                </tr>
              </thead>
              <tbody>
                <?php
                        include '../include/connection.php';
     $mor=$_GET['detail'];
      $sel="select * from menu where seril_no='$mor'";
      $run1=mysqli_query($conn,$sel);

 while ($data=mysqli_fetch_array($run1)) {
                 ?>
                  <tr>
                      <td><?php echo date('m/d/y h:i A',strtotime($data['day_time'])); ?></td>
                      <td><?php echo $data['eat_time']; ?></td>
                      <td><?php echo $data['quanity']; ?></td>
                      <td><?php echo $data['food']; ?></td>
                      <td><?php echo $data['food_price']; ?></td>
                      <td><?php echo $data['food_bill']; ?></td>
                  </tr>
              <?php } ?>
              </tbody>            
        </table>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
			<?php 
            include '../include/connection.php';
            $que="select * from dep_customer inner join menu on dep_customer.dep_id = menu.seril_no where seril_no='$mor'";
            $ru=mysqli_query($conn,$que);
            $item_bill=0;
            while ($sta=mysqli_fetch_array($ru)) {
            $item =$sta['food_bill'];
             $item_bill =$item_bill +$item; 
            }

            $bill=$total_dep +$item_bill;
            $due=$bill-$advance_dep;



            
            ?>
                <tr>
                    <td >Room_rent</td>
                    <td><?php echo $room_rent_dep."*".$day_dep."=".$total_dep; ?></td>
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
                    <td><?php echo $advance_dep; ?></td>
                </tr>
                <tr>
                    <td>Due_Amount</td>
                    <td><?php echo $due; ?></td>
                </tr>  
            </tbody>
        </table>
	</section>
</body>
</html>