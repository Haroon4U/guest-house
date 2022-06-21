 <?php
include '../include/connection.php';
// $delete_id = $_POST['deleteid'];
$delete_id= $_GET['dele'];
$sql = "DELETE FROM customer_data WHERE id='$delete_id'";

if (sqlsrv_query($conn, $sql)) {
    header("location: ../index.php");
}


?>