<link rel="stylesheet" type="text/css" media="screen" href="bootstrap4/css/customerform.css" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


  <!-- The Modal -->
  <div class="modal fade" id="customer">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Customer Form</h3>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container form-focus">
            <form action="customerform/formsql.php" method="post">
                <div class="input-field">
                  <input class="validate" required="" type="text" name="Name">
                  <label>Customer_Name:</label>
                </div>
                <div class="input-field">
                  <input required="" type="text" name="refer">
                  <label>Referance:</label>
                </div>
                <div class="input-field">
                  <input required="" type="tel" name="cnic">
                  <label>Cnic/Passport no:</label>
                </div>
                <!-- row start -->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="input-field">
                      <input required="" type="text" name="status">
                      <label>Status:</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-field">
                      <input required="" type="text" name="car">
                      <label>Vehicle_No:</label>
                    </div>
                  </div>


                <div class="col-sm-6">
<!--                   <label>Date_arival:</label> -->
                  <input required="" type="datetime-local" name="date_arival">
                </div>
                  <!-- row end -->
                </div>
                    <div class="input-field">
                      <input required="" type="text" name="address">
                      <label>Address:</label>
                    </div>

                <div class="input-field">
<!--                       <i class="material-icons prefix">phone</i> -->
                      <input required="" type="number" data-length="11" name="cell_No">
                      <label>Cell_No:</label>
                </div>
                        <div class="input-field">
                            <input required="" type="text" name="room">
                            <label>Room:</label>
                        </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-field">
                            <input required="" type="text" name="person">
                            <label>person:</label>
                        </div>
                        <div class="input-field">
                            <input required="" type="number" name="room_rent">   
                            <label>Room_Rent:</label>
                        </div>                        
                  </div>
                  <div class="col-sm-6">
                        <div class="input-field">
                            <input required="" type="number" name="advance">   
                            <label>Advance:</label>
                        </div>

                        <div  class="input-field">
                            <input required="" type="number" name="day">   
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
