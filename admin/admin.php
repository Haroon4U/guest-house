<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- meterialize -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
    <script src="materialize/js/materialize.min.js"></script>	
</head>
<body>
<div class="row">
  <div class="col s4"></div>
  <div class=" jumbo z-depth-3 col s4">
    <h4>Login Page </h4>
     <form method="post" action="adminsql.php">
      <div class="input-field">
            <input required="" id="email_inline" name="email" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
      <div class="">
        <div class="input-field">
          <input required="" id="password" name="passward" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
       <button class="btn waves-effect waves-light" type="submit" name="submit">login
          <i class="material-icons right">send</i>
         </button>
    </form>
  </div>
</div>	
</body>
</html>
