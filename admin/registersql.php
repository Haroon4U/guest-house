<?php 
include '../include/connection.php';
if (isset($_POST['save'])) {
  $name=$_POST['name'];
   $email=$_POST['email'];
   $pwd=$_POST['password'];

    $qwe="SELECT * FROM client WHERE client_email='$email' ";
  $run=mysqli_query($conn,$qwe);
  if (mysqli_num_rows($run)>0) {

     echo "<script>window.open('../index.php','_self');alert('This E-mail is already have try another one thks...')</script>";
     exit();
  }
  
    echo $sql="INSERT INTO client( client_name, client_email, client_password) VALUES ('$name','$email','$pwd')";
    
    try{

      if(mysqli_query($conn,$sql))
      {
      echo "<script>window.open('../index.php','_self');alert('registeration successfull')</script>";
          exit();
          }
          else
            {throw new Exception("Failed to insert", 1);
            }
    }
    catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
    }



 ?>
