 <?php include "../include/connection.php"; ?>
              <button type="button" class="btn btn-outline-dark btn-lg" id="mybtn">
               Food/Bill
              </button>
 <!-- The Modal -->
  <div class="modal fade" id="modal">
    <div class="modal-dialog">
      <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Menu Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="../menu/menusql.php" method="post">
            <div class="form-group">
               <label hidden=""> Id: </label>
               <input hidden="" readonly="" id="id" class="form-control " value="<?php echo  $_GET['info'];?>" type="text" name="a">          
            </div>       
            <div class="form-group">
              <label>  Date/Time: </label>
              <input required="" id="day" class="form-control"type="datetime-local" name="day">
            </div> 
            <div class="form-group">
               <label>Eating:</label>
               <select required="" id="eat" name="eat" class="form-control">
                     <option>Choose your option</option>
                     <?php 
                     $select ="select * from timeing";
                     $run = mysqli_query($conn, $select);
                     if ($run == true) {
                     if (mysqli_num_rows($run)>0) {
                     while ($data = mysqli_fetch_assoc($run)) {
                     $role = $data['eating_time'];
                     $id = $data['id'];
                     ?>
                     <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                    <?php 
                          }
                        }
                      }

                    ?>        
               </select>
            </div> 
            <div class="form-group">
                <label>Quanity:</label>
                <input  required="" id="quanity" class="form-control " type="number" name="quanity">
            </div>
            <div class="form-group">
                 <label>Item:</label>
                 <input required="" id="food" class="form-control " type="text" name="food">
            </div>
            <div class="form-group">
                 <label>Item_price:</label>
                 <input required="" id="foodp" class="form-control " type="text" name="food_price">
            </div> 
            <!-- Modal footer -->
            <div class="modal-footer">
               <button type="submit" class="btn btn-dark" name="save">Save</button>
               <button type="submit" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>                               
        </form>
      </div>
        
      </div>
    </div>
  </div>           