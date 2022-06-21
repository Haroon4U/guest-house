<?php 

session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Maralla view</title>
		<meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--link connect to bootstrap & css  -->
        <link rel="stylesheet" href="bootstrap4/css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--link connect to bootstrap & javascript  -->
        <script src="bootstrap4/javascript/bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="bootstrap4/javascript/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
				<!-- navbar -->
		<div> 
			<?php include_once "nav/navbar.php"; ?>
		</div>
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
				<div><?php include_once "sidebar/slide.php";?></div>
			</div>
			<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
					<!-- search bar -->
			<div  class="tab-content">
					<div  id="home" class="container tab-pane active">
						<!-- frame table -->
						<br>
						<div class="container">
		                    <input style="border-radius: 22px;" class="form-control" id="framedata" type="text" placeholder="Search By Cnic..">
	                    </div>
					
						<div>
							<?php include "framework/table.php"; ?>
						</div>	
					</div>
	                    <!-- BILL TAble  -->
					<div  id="billpage" class="container tab-pane fade">
                      <div><?php include "bill/billform.php" ?></div>	
					</div>			
			</div>		

					

									<!-- row end -->
		</div>

</body>
</html>

