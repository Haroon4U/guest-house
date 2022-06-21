<?php include '../include/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>summary</title>
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
	<h4 class="text-center">Monthly Data Summary</h4>

	<div>
		<br>
		<div  class="container">
			
				<form class="form-inline"  method="post" action="summary.php">
					     <label class="font-weight-bold">From: </label>
				    	<input required="" type="date" name="from" id="from_date" class="form-control"/>
					    <label class="font-weight-bold">To: </label>
				    	<input required="" type="date" name="to" id="to_date" class="form-control"/>
					    <input type="submit" name="filter" id="filter" value="Filter" class="btn btn-info" />
				
				</form>
				<br>
				<div>
          <?php if (isset($_POST['filter'])) {
          ?>
					<h6>From date:</h6><span><?php echo date('m/d/y',strtotime($_POST['from'])); ?></span>
					<h6>To date:</h6><span><?php echo date('m/d/y',strtotime($_POST['to'])); ?></span>
				</div>
      <?php  } ?>
			
		</div>
	</div>
	<br>
		<div>
			<table id="pages" class="table table-striped">
				<thead>
					<tr>
						 <th>Ser/no</th>
						 <th>Name:</th>
						 <th>Cnic/Pass..</th>
             <th>D_arrival</th>
             <th>Addr..</th>
             <th>Status</th>
             <th>Vehicle_no</th>
             <th>Room_no</th>
             <th>Room_rent</th>
             <th>Advance</th>
             <th>Total_amo..</th>

					</tr>
				</thead>
				<tbody>
					     <?php 
					     if (isset($_POST['filter'])) {
					   	$from=$_POST['from'];
					    $to=$_POST['to'];
					     $i=1;
					     	$qwe="select * from dep_customer where date_arival between ('".$from."') AND ('".$to."') ORDER BY id DESC";
                            $result=sqlsrv_query($conn,$qwe);

					     	while ($row=sqlsrv_fetch_assoc($result)) {
         $id=$row['id'];
         $name=$row['customer_name'];
         $d_arival=$row['date_arival'];
         $d_depature=$row['date_depature'];
         $cnic=$row['cnic'];
         $cell=$row['phone_no'];
         $address=$row['address'];
         $person=$row['Person'];
         $status=$row['status'];
         $car=$row['vehicle'];
         $advance=$row['advance'];
         $room_rent=$row['room_rent'];
         $room_no=$row['room'];
         $total=$row['total'];

    ?>
      <tr>
      	<td><?php echo $i++; ?></td>
      	<td><?php echo $name; ?></td>
        <td><?php echo $cnic; ?></td> 
        <td><?php echo date('m/d/y H:i:s',strtotime($d_arival)); ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $status; ?></td>
        <td><?php echo $car; ?></td>
        <td><?php echo $room_no; ?></td>
        <td><?php echo $room_rent; ?></td>
        <td><?php echo $advance; ?></td>
        <td><?php echo $total; ?></td>
   <?php } }
    if (isset($_POST['filter'])) {
              $from=$_POST['from'];
              $to=$_POST['to'];
    $sel="SELECT * FROM depature where date_arival between ('".$from."') AND ('".$to."') ORDER BY id DESC";
          $runn=sqlsrv_query($conn,$sel);
          while ($data=sqlsrv_fetch_array($runn)) {
          $name=$data['customer_name'];
         $date=$data['date_f'];
         $day=$data['day'];
         $refer=$data['refer'];
         $d_arival=$data['date_arival'];
         $d_depature=$data['date_depature'];
         $cnic=$data['cnic'];
         $cell=$data['phone_no'];
         $address=$data['address'];
         $person=$data['Person'];
         $status=$data['status'];
         $car=$data['vehicle'];
         $advance=$data['advance'];
         $room_rent=$data['room_rent'];
         $room_no=$data['room'];
         $total=$data['total'];
  
      ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $cnic; ?></td> 
        <td><?php echo date('m/d/y H:i:s',strtotime($d_arival)); ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $status; ?></td>
        <td><?php echo $car; ?></td>
        <td><?php echo $room_no; ?></td>
        <td><?php echo $room_rent; ?></td>
        <td><?php echo $advance; ?></td>
        <td><?php echo $total; ?></td>
          
      </tr>  
      <?php 
        } }?>                

				</tbody>
			</table>
		</div>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function()
  {
    $("#pages").DataTable();
  });
  
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

