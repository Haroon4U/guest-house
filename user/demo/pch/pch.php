
<!DOCTYPE html>
<html>
<head>
	<title>pch</title>
<!-- 	  <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" /> -->
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--link connect to bootstrap & javascript  -->
        <script src="javascript/bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
        <script src="javascript/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body class="font-weight-bold">
	<!-- <a href="#" id="print" onclick="javascript:printlayer('div,id,name')">print</a>
 -->
<div class="row">
	<div class=" col-sm-12 col-md-12 col-xl-12 col-lg-12 text-center">
		<h4>Proforma Checking Hotel</h4>
		<h5>Margalla view Guest house</h5>
		<p>House No 29 St#32 f 6/1 Islamabad Ph# 051-26042-10 </p>
	</div>
	<div class="container" style="text-align: right;margin-top: -6rem;">
		<p>Mo Mr-Zulifqar Ali:03335118121</p>
		<p>Manager; Imtiaz:03345750114</p>

	</div>
	<div style=" margin-left:7rem;margin-top: -3rem; ">
		<p><?php echo date("m/d/y");?></p>
		
	</div>
     <div class="container">
	<table class="  table table-bordered">
		<thead>
			<tr>
			   <td>Serial_no</td>
			   <td>Name</td>
			   <td>Arival Date</td>
			   <td>CNIC_NO</td>
			   <td>Phone_No</td>
			   <td>Address</td>
			   <td>Status</td>
			   <td>vehicle</td>
			</tr>
		</thead>
		<tbody>
			<?php
			include '../include/connection.php';
			$i=1; 
		   $date=date('Y/m/d');
			$pch="select * from customer_data";
			$run=mysqli_query($conn,$pch);
			while ($row=mysqli_fetch_array($run)) {
			     
			  ?>
			<tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $row['customer_name'] ?></td>
				<td><?php echo $row['date_arival'] ?></td>
				<td><?php echo $row['cnic'] ?></td>
				<td><?php echo $row['phone_no'] ?></td>
				<td><?php echo $row['address'] ?></td>
				<td><?php echo $row['status'] ?></td>
				<td><?php echo $row['vehicle'] ?></td>
			</tr>
                            <?php } ?>
				<tr>
				<th colspan="8" style="height: 3rem;"></th>	
				</tr>
			<tr>
				<td></td>
				<td>Total Rooms</td>
				<td>12</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
						<?php
            $c=mysqli_query($conn,"SELECT COUNT(room_rent) AS tot FROM customer_data");
            $co=mysqli_fetch_assoc($c);
            $to=$co['tot'];
			$min=12-$to;
            ?>
			<tr>
				<td></td>
				<td>Occupaid</td>
				<td> <?php echo $to ?> </td>
				<td></td>
				<td></td>
				<td></td>
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
			</tr>						

		  
		</tbody>
	</table>
	</div>
</div>
</body>
</html>