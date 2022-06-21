<?php 
session_start();
?>
<!DOCTYPE html>
<html class="support-no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Side</title>
           <!--link connect to bootstrap & css  -->
        <link rel="stylesheet" href="bootstrap4/css/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--link connect to bootstrap & javascript  -->
        <script src="bootstrap4/javascript/bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="bootstrap4/javascript/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link rel="stylesheet" href="../dist/_css/prefixed/js-offcanvas.css">
<!--     <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
    <script src="../vendor/modernizr.js"></script>
    <script src="../dist/_js/js-offcanvas.pkgd.js"></script>
    <script>
		$( function(){


			$( '#left' ).offcanvas( {
				modifiers: "left,overlay",
				triggerButton: '.js-offcanvas-trigger-left'
			} );
		});
                    $(document).ready(function(){
            $("#myInput").on("keyup", function() {
             var value = $(this).val().toLowerCase();
               $("#myTable li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                 });
                   });
                     });
    </script>

</head>
<body>

<main class="c-offcanvas-content-wrap" role="main">
                    <!-- navbar -->
        <div> 
            <?php include_once "nav/navbar.php"; ?>
        </div>
</main>

<aside id="left" >
        <div><?php include_once "sidebar/slide.php";?></div>   
</aside>
            <div>
                <?php include 'customerform/customer.php'; ?>
            </div>
            <div>
                <?php include '../../admin/register.php'; ?>
            </div>
                    <!-- search bar -->
                    <div>
                        <br>
                        <div class="container">
                            <input style="border-radius: 22px;" class="form-control" id="framedata" type="text" placeholder="Search By Cnic..">
                        </div>
                    </div>
                                <!--Framework  -->
            <div>
                <?php include 'framework/table.php'; ?>
            </div>               


</body>
</html>
        <script> 
                $("#regist").click(function(){
                $("#register").modal();
              });
             $(document).ready(function(){
                $("#customerform").click(function(){
                $("#customer").modal();
              });
             });
            $(document).ready(function(){
                $('.collapse').collapse()
                     });   
            $(document).ready(function(){
                     
            $("#myInput").on("keyup", function() {
             var value = $(this).val().toLowerCase();
               $("#myTable li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                 });
                   });
                     });

        </script>  
