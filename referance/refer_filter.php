
<!DOCTYPE html>
<html>
<head>
	<title>Refer_filter</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
     <!-- datatable -->
     <link rel="stylesheet" type="text/css" href="DataTables-1.10.18/css/jquery.dataTables.min.css">
     <script src="DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<header>
	<div class="container_fluid">
  <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
   <img style="    height: 3rem;" src="../img/2.png" alt="guest house">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home</a>
      </li>
    </ul>
  </div>  
</nav>

 </div>
</header>
<div>
	<h1 class="text-monospace text-center">Filter Data </h1>
</div>	
<div class="container">
    <div class="form-inline">
        <form class="form-inline" method="post" action="refer_filter.php">
			<label class="font-weight-bold">Referance:</label>

			<input required="" placeholder="please enter your Referance" type="text" name="refer" class="form-control">
			<label class="font-weight-bold">From: </label>
	    	<input required="" type="date" name="from" class="form-control"/>
		    <label class="font-weight-bold">To: </label>
	    	<input required="" type="date" name="to" class="form-control"/>
			<input type="submit" name="filter" value="Filter" class="btn btn-outline-dark"/>			
	    </form>
    </div> 

	<br>
	<div class="row">

		<?php 
		include '../include/connection.php';
		if (isset($_POST['filter'])) {
					$refer=$_POST['refer'];
				    $from=$_POST['from'];
	                $to=$_POST['to'];	
        $amount=0;
        $earn=0;
        $day=0;
	    $sql1="SELECT * FROM dep_customer WHERE refer LIKE '%$refer' AND date_arival between ('".$from."') AND ('".$to."')";
		$runn=mysqli_query($conn,$sql1);
		while ($data=mysqli_fetch_array($runn)) {
			$amount +=$data['total'];
			$earn +=$data['advance'];
			$day +=$data['day'];
		}
	      $subtract= $amount - $earn;

		?>
		<div class="col-sm-4 col-xl-4 col-md-4 col-lg-4">
			<h6>From date:</h6><span><?php echo date('m/d/y',strtotime($_POST['from'])); ?></span>		
<!-- 			<h6>Total Amount:</h6><span><?php echo $amount ?></span> -->
			<h6>Advance:</h6><span><?php echo $earn ?></span>
		</div>
         <div class="col-sm-4 col-xl-4 col-md-4 col-lg-4">
			<h6>To date:</h6><span><?php echo date('m/d/y',strtotime($_POST['to'])); ?></span>         	
         	<h6>Earning:</h6><span><?php echo $amount ?></span>
         	
         </div>
		<div class="col-sm-4 col-xl-4 col-md-4 col-lg-4">
			<h6>stay/Days:</h6><span><?php echo $day ?></span>
		</div>
		<br>		
	</div>
</div>
<br>
<div>
	<div>
		<table id="page" class="table table-striped">
			<thead>
					<tr>
<!-- 						 <th>Ser/no</th> -->
						 <th>Name:</th>
						 <th>Referance</th>
						 <th>Cnic/Pass..</th>
			             <th>D_arrival</th>
			             <th>Addr..</th>
			             <th>Day</th>
<!-- 			             <th>Status</th>
			             <th>Vehicle_no</th> -->
<!-- 			             <th>Room_no</th> -->
			             <th>Room_rent</th>
			             <th>Advance</th>
			             <th>Total_amo..</th>
					</tr>				
			</thead>			
			<tbody>
				<?php 
				// include '../include/connection.php';	
					// $i=1;
					$sql="SELECT * FROM dep_customer WHERE refer LIKE '%$refer' and date_arival between ('".$from."') AND ('".$to."')";
					$run=mysqli_query($conn,$sql);
	                 while ($row=mysqli_fetch_array($run))
	                    {?>
	                <tr>
<!-- 	                	<td><?php echo $i++ ?></td> -->
	                	<td><?php echo $row['customer_name'] ?></td>
	                	<td><?php echo $row['refer'] ?></td>
	                	<td><?php echo $row['cnic'] ?></td>
	                	<td><?php echo  date('m/d/y',strtotime($row['date_arival'])); ?></td>
	                	<td><?php echo $row['address'] ?></td>
	                	<td><?php echo $row['day'] ?></td>
<!-- 	                	<td><?php echo $row['status'] ?></td>
	                	<td><?php echo $row['vehicle'] ?></td>
	                	<td><?php echo $row['room'] ?></td>
 -->	                	<td><?php echo $row['room_rent'] ?></td>
	                	<td><?php echo $row['advance'] ?></td>
	                	<td><?php echo $row['total'] ?></td>

	                </tr> 	
                 <?php
                       }
				 }
				 ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function()
	{
	  $("#page").DataTable();
	});
</script>