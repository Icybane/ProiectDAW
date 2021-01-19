<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Biblioteca online</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Inregistreaza-te in biblioteca</h2>
	  <p>©copyright Stefan Lupu®</p>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Parola</label>
  	  <input type="password" name="password1">
  	</div>
  	<div class="input-group">
  	  <label>Confirma parola</label>
  	  <input type="password" name="password2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Autentificare</button>
  	</div>
  	<p>
  		Ai deja un cont? <a href="login.php">Intra in cont</a>
  	</p>
  </form>
</body>
</html>