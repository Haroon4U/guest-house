<table  class="table table-stripped">
	<thead>
    <tr>
    <th>Date/time</th>
    <th>Eating_Time</th>
    <th>Quanity</th>
    <th>Item</th>
    <th>Item_Price</th>
    <th>Item_bill</th>
    <th colspan="2">Action</th>
      
    </tr>
	</thead>
  <tbody>
    <?php 
    include '../include/connection.php';
    $sel="select * from menu where seril_no='$info'";
      $runn=mysqli_query($conn,$sel);
      while ($row=mysqli_fetch_array($runn)) {
        // $menu_id=$row['menu_id'];
    ?>
      <tr  id="<?php echo $row['menu_id']; ?>">
       <td data-target="day_time"><?php echo date('m/d/y h:i A',strtotime($row['day_time']));?></td> 
       <td data-target="eat_time"><?php echo $row['eat_time']; ?></td>
       <td data-target="quanity"><?php echo $row['quanity']; ?></td>
       <td data-target="food"><?php echo $row['food']; ?></td>
       <td data-target="food_price"><?php echo $row['food_price']; ?></td>
       <td><?php echo $row['food_bill']; ?></td>
       <td><a style="color: black;text-decoration: none;" class="del_link" data-toggle="tooltip" id="myTooltip" title="Click Me!" href="../menu/delete.php?dele=<?php echo $menu_id; ?> ">Delete</a></td>
 <!--       <td><a class="a " data-toggle="tooltip" data-placement="top" title="Click me!"  href="# " data-role="update" data-id="<?php echo $menu_id; ?>">Edit</a></td>
      </tr> -->
      <?php  } ?>
  </tbody>
</table>
<script type="text/javascript">
                $('#myTooltip').tooltip();
</script>