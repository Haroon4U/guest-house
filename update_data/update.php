<?php   
 $query="SELECT * FROM customer_data WHERE id='$info'";
   $run=sqlsrv_query($conn,$query);
   while ($row=sqlsrv_fetch_array($run)) 
   {
         $name=$row['customer_name'];
         $id=$row['id'];
         $days=$row['day'];
         $refer=$row['refer'];
         $d_arival=$row['date_arival'];
         $cnic=$row['cnic'];
         $cell=$row['phone_no'];
         $address=$row['address'];
         $person=$row['Person'];
         $status=$row['status'];
         $car=$row['vehicle'];
         $advance=$row['advance'];
         $room_rent=$row['room_rent'];
         $room_no=$row['room'];
   } ?>




<link rel="stylesheet" type="text/css" media="screen" href="../bootstrap4/css/customerform.css" />
  <!-- The Modal -->
  <div class="modal fade" id="info">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Update Form</h3>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container form-focus">
            <form action="../update_data/updatesql.php?id=<?php echo $id ?>" method="post">
                <div class="input-field">
                  <input class="validate" required="" value="<?php echo $name ?>" type="text" name="Name">
                  <label>Customer_Name:</label>
                </div>
                <div class="input-field">
                  <input required="" type="text" name="refer" value="<?php echo $refer ?>">
                  <label>Referance:</label>
                </div>
                <div class="input-field">
                  <input required="" type="tel" name="cnic" value="<?php echo $cnic ?>">
                  <label>Cnic/Passport no:</label>
                </div>
                <!-- row start -->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="input-field">
                      <input required="" type="text" name="status" value="<?php echo $status ?>">
                      <label>Status:</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-field">
                      <input required="" type="text" name="car" value="<?php echo $car ?>">
                      <label>Vehicle_No:</label>
                    </div>
                  </div>


                <div class="col-sm-6">
<!--                   <label>Date_arival:</label> -->
                  <input required="" type="text" name="date_arival" value="<?php echo $d_arival ?>">
                </div>
                  <!-- row end -->
                </div>
                    <div class="input-field">
                      <input required="" type="text" name="address" value="<?php echo $address ?>">
                      <label>Address:</label>
                    </div>

                <div class="input-field">
<!--                       <i class="material-icons prefix">phone</i> -->
                      <input required="" type="number" data-length="11" name="cell_No" value="<?php echo $cell ?>">
                      <label>Cell_No:</label>
                </div>
                        <div class="input-field">
                            <input required="" type="text" name="room" value="<?php echo $room_no ?>">
                            <label>Room:</label>
                        </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-field">
                            <input required="" type="text" name="person" value="<?php echo $person ?>">
                            <label>person:</label>
                        </div>
                        <div class="input-field">
                            <input required="" type="number" name="room_rent" value="<?php echo $room_rent ?>">   
                            <label>Room_Rent:</label>
                        </div>                        
                  </div>
                  <div class="col-sm-6">
                        <div class="input-field">
                            <input required="" type="number" name="advance" value="<?php echo $advance ?>">   
                            <label>Advance:</label>
                        </div>

                        <div  class="input-field">
                            <input required="" type="number" name="day" value="<?php echo  $days ?>">   
                            <label>Days:</label>
                        </div>                     
                  </div>    
                </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-light" type="submit" name="save">Submit
          </button>

          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
            </form>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>