<link rel="stylesheet" type="text/css" media="screen" href="bootstrap4/css/customerform.css" />
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


  <!-- The Modal -->
  <div class="modal fade" id="register">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">Register Form</h3>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container form-focus">
            <form method="post" action="admin/registersql.php" class="was-validated">
                <div class="input-field">
                  <input required="" name="name" type="text">
                  <label>Name:</label>
                </div>
                <div class="input-field">
                    <input required="" class="form-control" id="email" name="email" type="email">
                    <label for="email">Email:</label>
                    <span class="valid-feedback">Valid.</span>
                    <span class="invalid-feedback">invalid</span>
                </div>
                <div class="">
                <div class="input-field">
                  <input required="" name="password" type="password">
                  <label>Password:</label>
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
  