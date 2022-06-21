<?php include "../include/connection.php"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Table To Excel (XSL) Converter Example</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.2.1/minty/bootstrap.min.css">
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
      
        <form class="form-inline"  method="post" action="index.php">
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
<div class="container">
  <h1>Table To Excel (XSL) Converter Example</h1>
  <table class="table table-bordered table-striped">
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
        } ?>                

        </tbody>
  </table>
  <button class="btn btn-outline-dark" onclick="$('table').tblToExcel();">Export</button>
<?php } ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="jquery.tableToExcel.js"></script>
</body>
<script type="text/javascript">

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
</html>
