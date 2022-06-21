
<!DOCTYPE html>
<html>
<head>
	<title>Occupancy sheet</title>
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--link connect to bootstrap & javascript  -->
        <script src="javascript/bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
        <script src="javascript/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

</head>
<body class="font-weight-bold">

<div class="row">
	<div class=" col-sm-12 col-md-12 col-xl-12 col-lg-12 text-center">
		<h5>Occupancy Sheet</h5>
		<h4>Margalla view Guest house</h4>
		<p>House No 29 St#32 f 6/1 Islamabad Ph# 051-26042-10 </p>
	</div>
<!-- 	<div class="container" style="text-align: right;margin-top: -6rem;">
		<p>Mo Mr-Zulifqar Ali:03335118121</p>
		<p>Manager; Imtiaz:03345750114</p>

	</div> -->
	<div style="margin-left:7rem; ">
		<p><?php echo date("m/d/y");?></p>
		
	</div>

	<table class=" container table table-bordered">
		<thead>
			<tr>
			   <td>Serial_no</td>
			   <td>Guest Name</td>
			   <td>Room No</td>
			   <td>Rooms</td>
			   <td>C/in date</td>
			   <td>Status</td>
			   <td>Rate</td>
			   <td>comp,B/F</td>
			   <td>Remarks</td>
			</tr>
		</thead>
		<tbody>
			<?php
			include '../include/connection.php';
			$i=1; 
		   $date=date('Y/m/d');
			$pch="select * from customer_data";
			$run=sqlsrv_query($conn,$pch);
			while ($row=sqlsrv_fetch_array($run)) {

 
			  ?>
			<tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $row['customer_name'] ?></td>
				<td><?php echo $row['room'] ?></td>
				<td></td>
				<td><?php echo $row['date_arival'] ?></td>
				<td><?php echo $row['status'] ?></td>
				<td><?php echo $row['room_rent'] ?></td>
				<td></td>
				<td></td>
			</tr>
			 <?php } ?>

				<tr>
				<th colspan="9" style="height: 3rem;"></th>
					
				</tr>
				<?php 
            $occ="select * from customer_data";
			$runn=sqlsrv_query($conn,$occ);
		    $item_bill=0;
            while ($sta=sqlsrv_fetch_array($runn)) {
            $item =$sta['room_rent'];
            $item_bill =$item_bill+$item; 
            }
            $a=sqlsrv_query($conn,"SELECT AVG(room_rent) AS room FROM customer_data");
            $av=sqlsrv_fetch_assoc($a);
            $room_rent=$av['room'];
            

				 ?>
			<tr>
				<td></td>
				<td>Total Rooms</td>
				<td>12</td>
				<td></td>
				<td></td>
				<td>Total</td>
				<td><?php echo $item_bill ?></td>
				<td></td>
				<td></td>
			</tr>
			<?php
            $c=sqlsrv_query($conn,"SELECT COUNT(room_rent) AS tot FROM customer_data");
            $co=sqlsrv_fetch_assoc($c);
            $to=$co['tot'];
			$min=12-$to;
            ?>
			<tr>

				<td></td>
				<td>Occupaid</td>
				<td><?php echo $to ?></td>
				<td></td>
				<td></td>
				<td>Average</td>
				<td><?php echo $room_rent ?></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td>Vacant</td>
				<td><?php echo $min ?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>						
		   
		</tbody>
	</table>
</div>
</body>
</html>