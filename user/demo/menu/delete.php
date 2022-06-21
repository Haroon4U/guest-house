 <?php
include '../include/connection.php';
// $delete_id = $_POST['deleteid']; 
$delete_id= $_GET['dele'];
$sql = "DELETE FROM menu WHERE menu_id='$delete_id'";
if (mysqli_query($conn, $sql)) 
{
    header("location: ../index.php");
}

?>