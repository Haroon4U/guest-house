<br>
            <table class="table table-striped">
          <thead>
            <tr>
              <th>Serial/no</th>
              <th>Name</th>
              <th>CNIC</th>
              <th>Contact_no</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="frame">
            <?php 
            include "include/connection.php";
            $select="select * from customer_data ORDER BY id DESC";
            $run=sqlsrv_query($conn,$select);
            $i=1;
            while ($row=sqlsrv_fetch_array($run)) {
              $id=$row['id'];
            ?>
            <tr>
              <td><?php echo $i++ ?></td>
             <td><?php echo $row['customer_name']; ?></a></td>
              <td><?php echo $row['cnic']; ?></td>
              <td><?php echo $row['phone_no']; ?></td>
              <td><div class="dropdown">
          <a class=" btn dropdown-toggle" data-toggle="dropdown">More</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" data-toggle="tooltip" title="Click me!" href="detail/detail.php?info=<?php echo $id; ?>">Detail</a>
            <a class="dropdown-item" data-toggle="tooltip" title="Click me!" href="bill/billform.php?bill=<?php echo $id; ?>">Manual Bill</a>
            <a class="dropdown-item" data-toggle="tooltip" title="Click me!" href="bill/bill.php?bill=<?php echo $id; ?>">Bill</a>
      <!--       <a class="dropdown-item" data-toggle="tooltip" data-placement="top" title="Click me!" href="include_files/menu.php?a=<?php echo $id; ?>">Menu</a> -->
            <a class="rem dropdown-item" data-toggle="tooltip" title="Click me!" href="check_out/check_out.php?check=<?php echo $id; ?>">Check_out</a>
            <h5 class="dropdown-header">Dropdown header</h5>
             <a class="dropdown-item delete_link" data-toggle="tooltip" title="Click me!" href="delete_data/permanet_del.php?dele=<?php echo $id; ?>">Delete</a>
           
          </div>
        </div></td>
            </tr>
             
            <?php  } ?>
          </tbody>
        </table>
  </div>


<script language="JavaScript" type="text/javascript">
   $('[data-toggle="tooltip"]').tooltip(); 
  $(".delete_link").click(function(){
return confirm("Are you Sure You Want To Delete ?");
  });
  $(".rem").click(function(){
return confirm("Are you Sure You Want To Check out ?");
  });
            $(document).ready(function(){
            $("#framedata").on("keyup", function() {
             var value = $(this).val().toLowerCase();
               $("#frame tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                 });
                   });
                     });
</script>