<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Biblioteca online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Conecteaza-te la bilbioteca</h2>
	  <p>©copyright Stefan Lupu®</p>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Parola</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Intra in cont</button>
  	</div>
  	<p>
  		Nu ai cont? <a href="register.php">Autentifica-te</a>
  	</p>
  </form>
</body>
</html>