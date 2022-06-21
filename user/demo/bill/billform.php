<!DOCTYPE html>
<html>
<head>
	<title>Manual Bill</title>
	<link rel="stylesheet" href="../bootstrap4/css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
</head>
<body>
   <?php 
       include "../include/connection.php"; 
	   $get=$_GET['bill'];
	   $query="SELECT * FROM customer_data WHERE id='$get'";
	   $run=mysqli_query($conn,$query);
	   $row=mysqli_fetch_array($run) 
   ?>
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
   <div class="row">
	    <div class="col-sm-4">
		    <br>
		    <br>
		    <h2 class=" font-italic"><span style="font-size: 4rem">M</span>anual<span style="font-size: 6rem"> B</span>ill</h2>
	    </div>
	    <div class="col-sm-4">

	    	<div class="container">
	    		<form action="billrequiresql.php?id=<?php echo $_GET['bill']; ?>" method="Post">
			         <div class="form-group">
			           <label for="name">Name:</label>
			           <input id="name"  required="" type="text" class="form-control" value="<?php echo $row['customer_name'];?>" name="name">
			         </div>
			         <div class="form-group">
			           <label for="date">Depature/Date:</label>
			           <input required="" id="date" type="datetime-local" class="form-control" name="d_date">
			         </div>
			         <div class="form-group">
			           <label for="room_no">Room_no:</label>
			           <input id="room_no"  required="" type="number" class="form-control" name="room_no" value="<?php echo $row['room']; ?>">
			         </div>
			         <div class="form-group">
			           <label for="day">Day:</label>
			           <input id="day" required="" type="number" class="form-control" name="day" value="<?php echo $row['day']; ?>">
			         </div>			         
			         <div class="form-group">
			           <label for="advance">Advance:</label>
			           <input id="advance" required="" type="number" class="form-control" name="advance" value="<?php echo $row['advance'] ?>">
			         </div>
			         <div class="form-group">
			           <label for="discount">Discount:</label>
			           <input id="discount"  required="" class="form-control" type="number" name="discount" placeholder="Discount In percentage">
			         </div>
			         <div class="custom-control custom-checkbox">
			           <input type="checkbox" class="custom-control-input" id="customCheck" name="checkout">
			           <label class="custom-control-label" for="customCheck">checkout</label>
			         </div>
			         <div class="float-right"> 
				       <button class="btn btn-outline-dark" onclick="myFunction()">Print Preview</button>
				       <button type="submit" class="btn btn-outline-dark" name="save">submit</button>
                     </div>		
	    		</form>
	    	</div>  	
	    </div>
   	
   </div>
</body>
</html>
<script>
function myFunction() {
  window.open("bill.php?bill=<?php echo $get; ?>");
}
</script>