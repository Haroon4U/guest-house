
    <title>guest house</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="DataTables-1.10.18/css/jquery.dataTables.min.css">
  <script src="DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function()
      {
      $('[data-toggle="tooltip"]').tooltip();   
      });
          $(document).ready(function(){
            $("#pagination").DataTable();
          });
        </script>


 <body>
    <table id="pagination"  class="table table-striped">
        <thead>
              <th>Name:</th>
              <th>Referance:</th>
              <th>Cnic:</th>
              <th>Address:</th>
              <th>Room:</th>
              <th>action:</th> 
        </thead>
        <tbody">
       <?php 
      include "../include/connection.php";
         $dep_customer="SELECT * FROM dep_customer ORDER BY id DESC ";
          $dep_runn=mysqli_query($conn,$dep_customer);
          while ($data=mysqli_fetch_array($dep_runn)) {
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
         $check=$data['check_out'];
  
      ?>
      <tr>
         <td data-toggle="tooltip"  title="<?php echo date('m/d/y',strtotime($check));?>" ><?php echo $name_dep ?></a></td>
          <td><?php echo $refer_dep ?></a></td>
          <td><?php echo $cnic_dep ?></a></td>
          <td><?php echo $address_dep ?></a></td>
          <td><?php echo $room_no_dep ?></a></td>
          <td><a class="btn" data-toggle="tooltip" title="Click me!" href="detail_dep_cust.php?detail=<?php echo $data['dep_id'];?>">detail</a></td>
          
      </tr>  
      <?php 
        } ?>                
		


      <?php
            
          $sel="SELECT * FROM depature ORDER BY id DESC ";
          $runn=mysqli_query($conn,$sel);
          while ($data=mysqli_fetch_array($runn)) {
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
         <td><?php echo $name ?></a></td>
          <td><?php echo $refer ?></a></td>         
          <td><?php echo $cnic ?></a></td>
          <td><?php echo $address ?></a></td>
          <td><?php echo $room_no ?></a></td>
          <td><a class="btn" data-placement="top" title="Click me!" href="detail_dep.php?detail=<?php echo $data['id']; ?>">Detail</a></td>
          
      </tr>  
      <?php 
        } ?>                
        </tbody>
    </table>