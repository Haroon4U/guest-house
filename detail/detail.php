<?php include "../include/connection.php"; 
$info=isset($_GET['info']) ? $_GET['info']: '';
    $Sql="SELECT * from customer_data where id ='$info'";
        $runn=sqlsrv_query($conn,$Sql) or die( sqlsrv_error($conn));
        $row=sqlsrv_fetch_array($runn);
    
         $id=$row['id'];
     
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
		<meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--link connect to bootstrap & css  -->
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<header>
	<div class="container_fluid">
  <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
   <img style="    height: 3rem;" src="img/2.png" alt="guest house">
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
		<div class="text-monospace">
		    <h1 class="text-center"><?php echo $row['customer_name']; ?></h1>
		</div>
		<div class="row">
		      <div class="col-sm-6">
			       <ul class="list-group list-group-flush">
			           <li class="list-group-item"><span class="font-weight-bold">Refrance:</span><?php echo $row['refer']; ?> </li>
			           <li class="list-group-item"><span class="font-weight-bold">Cnic/passport:</span><?php echo $row['cnic']; ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">D_arrival:</span><?php echo date('m/d/y  h:i A',strtotime($row['date_arival'])); ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">Address:</span><?php echo $row['address']; ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">Days:</span><?php echo $row['day'] ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">Person:</span><?php echo $row['Person']; ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">Status:</span><?php echo $row['status']; ?></li>

			       </ul>
		     </div>
		     <div class="col-sm-6">
			        <ul class="list-group list-group-flush">
			           <li class="list-group-item"><span class="font-weight-bold">Contact:</span><?php echo $row['phone_no']; ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">Room_no:</span><?php echo $row['room']; ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">Vehicle_no:</span><?php echo $row['vehicle']; ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">Room_rent:</span><?php echo $row['room_rent']; ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">Advance:</span><?php echo $row['advance']; ?></li>
			           <li class="list-group-item"><span class="font-weight-bold">Total_Rent:</span><?php echo $row['total']; ?></li>
			        </ul>
	         </div>	     
			<!-- End Row -->
		</div>
			 <!-- update button -->
				<div>
				    <button  style="float: right;" id="detail" class="btn btn-outline-dark btn-lg" data-toggle="modal">Update</button>
				    <div><?php include_once "../update_data/update.php" ?></div>
				</div>	
			    <br>
				<br>
				<hr>
					<!--Menu start  -->
                <div class="float-right">
					<div class="container">
					  <div>
					  	<?php include '../menu/menuform.php'; ?>
					  </div>
					</div>   

				</div>
				<br>
				<!-- menu table -->
				<div>
				  <?php include '../menu/menutable.php'; ?>
				</div>
	</div>

</body>
</html>
<script type="text/javascript">

	        	$("#detail").click(function(){
                $("#info").modal();
              });
	            $(document).ready(function(){
                $("#mybtn").click(function(){
                $("#modal").modal();
              });
             });

	          $(".del_link").click(function(){
              return confirm("Are you Sure You Want To Delete This Item ?");
  });	
</script>