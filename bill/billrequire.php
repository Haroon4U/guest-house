<!--  <link rel="stylesheet" type="text/css" media="screen" href="../bootstrap4/css/customerform.css" /> -->
<link rel="stylesheet" href="../bootstrap4/css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
 <?php include "../include/connection.php"; 
   $get=$_GET['bill'];
   $query="SELECT * FROM customer_data WHERE id='$get'";
   $run=sqlsrv_query($conn,$query);
   $row=sqlsrv_fetch_array($run) 
 ?>
 <div class="row">
  <div class="col-sm-4">
    <br>
    <br>
    <h2 class=" font-italic"><span style="font-size: 4rem">M</span>anual<span style="font-size: 6rem"> B</span>ill</h2>
  </div>
   <div class="col-sm-4 col-xl-4 col-lg-4 col-md-4">
    <br>
     <form action="billrequiresql.php?id=<?php echo $_GET['bill']; ?>" method="Post">
<!--        <div> -->
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
           <input id="room_no" required="" type="number" class="form-control" name="room_no" value="<?php echo $row['room']; ?>">
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
           <label for="discount">Discount In percentage:</label>
           <input id="discount" required="" class="form-control" type="number" name="discount">
         </div>
         <div class="custom-control custom-checkbox">
              <input required="" type="checkbox" class="custom-control-input" id="customCheck" name="checkout">
              <label class="custom-control-label" for="customCheck">checkout</label>
         </div>               
<!--        </div> -->
       <div class="float-right">
          <button type="submit" class="btn btn-outline-dark" name="preview">Print Preview</button> 
          <button type="submit" class="btn btn-outline-dark" name="update">bill</button>          
       </div>
     </form>
  </div>
 </div>

  <script type="text/javascript">
  	                $(document).ready(function(){
                $("#mybtn").click(function(){
                $("#modal").modal();
              });
             });

  </script>