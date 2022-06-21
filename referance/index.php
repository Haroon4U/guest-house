<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Table To Excel (XSL) Converter Example</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.2.1/minty/bootstrap.min.css">
<!-- data table -->
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
<div>
    <h1 class="text-monospace text-center">Filter Data </h1>
</div>  
<div class="container">
    <div class="form-inline">
        <form class="form-inline" method="post" action="index.php">
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
        $runn=sqlsrv_query($conn,$sql1);
        while ($data=sqlsrv_fetch_array($runn)) {
            $amount +=$data['total'];
            $earn +=$data['advance'];
            $day +=$data['day'];
        }
          $subtract= $amount - $earn;

        ?>
        <div class="col-sm-4 col-xl-4 col-md-4 col-lg-4">
            <h6>From date:</h6><span><?php echo date('m/d/y',strtotime($_POST['from'])); ?></span>      
<!--            <h6>Total Amount:</h6><span><?php echo $amount ?></span> -->
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
<div class="container">
  <table id="page" class="table table-striped">
            <thead>
                    <tr>
<!--                         <th>Ser/no</th> -->
                         <th>Name:</th>
                         <th>Referance</th>
                         <th>Cnic/Pass..</th>
                         <th>D_arrival</th>
                         <th>Addr..</th>
                         <th>Day</th>
<!--                         <th>Status</th>
                         <th>Vehicle_no</th> -->
<!--                         <th>Room_no</th> -->
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
                    $run=sqlsrv_query($conn,$sql);
                     while ($row=sqlsrv_fetch_array($run))
                        {?>
                    <tr>
<!--                        <td><?php echo $i++ ?></td> -->
                        <td><?php echo $row['customer_name'] ?></td>
                        <td><?php echo $row['refer'] ?></td>
                        <td><?php echo $row['cnic'] ?></td>
                        <td><?php echo  date('m/d/y',strtotime($row['date_arival'])); ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['day'] ?></td>
<!--                        <td><?php echo $row['status'] ?></td>
                        <td><?php echo $row['vehicle'] ?></td>
                        <td><?php echo $row['room'] ?></td>
 -->                        <td><?php echo $row['room_rent'] ?></td>
                        <td><?php echo $row['advance'] ?></td>
                        <td><?php echo $row['total'] ?></td>

                    </tr>   
                 <?php
                       }
                 
                 ?>
            </tbody>
  </table>
 <button class="btn btn-outline-dark" onclick="$('table').tblToExcel();">Export</button>
</div>
<?php } ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="jquery.tableToExcel.js"></script>
</body>
<script type="text/javascript">
    $(document).ready(function()
  {
    $("#page").DataTable();
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
</html>
