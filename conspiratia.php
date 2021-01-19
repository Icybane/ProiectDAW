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
</head>
<body>
<div class="header">
	<h2>Conspiraţia - Dan Brown</h2>
	<p>©copyright Stefan Lupu®</p>
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
  <li><a href="index.php">Acasa</a></li>
</ul>
    <?php endif ?>
	<br><br>
	
	<img src="imagini\conspiratia.jpg">
	<br><br>
	<a href="carti\Conspiratia - Dan Brown.pdf" download> 
     
         <button class="btn">Download</button> 
         </a> 
         <br><br>
    <p> Cand un satelit NASA face o descoperire ciudată intr-un ghetar din Arctica, agentia isi proclama mult asteptata si absolut necesara victorie - o victorie cu profunde implicatii politice, caci Statele Unite ale Americii sunt in plina campanie electorala. Daca aceasta descoperire va fi confirmata, ea va schimba cursul istoriei, caci tot ceea ce stiam despre aparitia noastra in Univers e o mare minciuna, iar implicatiile sunt de neimaginat. Pentru a verifica autenticitatea acestei extraordinare descoperiri, Casa Alba trimite la fata locului specialisti de renume, printre care si Rachel Sexton, fiica adversarului politic al actualului presedinte, si celebrul om de stiinta si vedeta de televiziune Michael Tolland. Insa ceea ce descopera ei intrece orice asteptare. Cu o echipa de asasini pe urmele lor, cei doi urmeaza sa afle un lucru tulburator: ca adevarul poate fi cea mai teribila descoperire.
</p>
   <br><br> <br><br>
   <object data="carti\Conspiratia - Dan Brown.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\Conspiratia - Dan Brown.pdf">to the PDF!</a></p>
  </object><br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='actiune.php'">Inapoi</button>

</div>
		
</body>
</html>
