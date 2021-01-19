<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca online</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	

</style>
</head>
<body>




<div class="header">
	<h2>Bine ai venit!</h2>
	<p>©copyright Stefan Lupu®</p>
	<br><br>
	
</div>
<div class="content">

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<!--<p>Salut! <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">deconecteaza-te</a> </p>-->
        <ul>
  <li><a href="index.php?logout='1'">Deconecteaza-te</a></li>
  <li><a href="comments.php">Review-uri/Comentarii</a></li>
</ul>
    <?php endif ?>
	<br><br>
	</h2>Categorii:</h2>
	<br><br>
	
	<button class="btn" onclick="window.location.href='scifi.php'">Sci-Fi</button>
	<button class="btn" onclick="window.location.href='actiune.php'">Actiune</button>
	<button class="btn" onclick="window.location.href='psihologie.php'">Psihologie</button>
	<!--<button class="btn" onclick="window.location.href='istorie.php'">Istorie</button>-->
	<button class="btn" onclick="window.location.href='filosofie.php'">Filosofie</button>
	<!--<button class="btn" onclick="window.location.href='comments.php'">Review-uri / comentarii</button>-->
	<br><br>
</div>

</body>
</html>
