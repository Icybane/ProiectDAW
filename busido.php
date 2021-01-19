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
	<h2>Busido - Inazo Nitobe</h2>
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
	
	<img src="imagini/busido.jpg">
    <br><br>
    <a href="carti\Inazo - Bushido.pdf" download> 
     
         <button class="btn">Download</button> 
         </a> 
         <br><br>
    <p>   Bushido (武士道 bushidō?, Calea Războinicului) este un cuvânt japonez care este folosit pentru a descrie un cod de conduită al războinicilor samurai, un concept asemănător cu cel de cavalerism. Aceasta este un cod moral care pune accent pe cumpătare, loialitate, măiestrie în artele martiale și moarte onorabilă.
      Bushido își are originile în neo-confucianism, dar este influențat puternic și de șintoism și budism, fiind un cod de conduită al samuraiului sau mai bine zis o „cale” pe care un bărbat trebuie s-o urmeze pentru a deveni războinic fără însă să-și piardă umanitatea. Bushido se dezvoltă între secole XVI și XX, existând numeroase documente scrise și are o răspândire largă pe teritoriul Japoniei, deși unii cercetători au remarcat că termenul „bushido” în sine este rar folosit in literatura.
     Cuvântul a fost folosit pentru prima dată în Japonia, în timpul secolului al 17-lea. A intrat în utilizarea comună în Japonia și Occident după 1899, odată cu publicarea cartii lui Nitobe Inazō "Bushido: Sufletul Japoniei"
   O carte minunată care reflectă despre filosofia Japoniei, este destul de bună pentru a cunoaște acest popor, o carte despre principiile morale ale samurailor, și multe altele, doar citind-o poți face parte din acest popor minunat.</p>
   <br><br> <br><br>
   <object data="carti\Inazo - Bushido.pdf" type="application/pdf" width="100%" height="850">
    <p>Mergi la pdf <a href="carti\Inazo - Bushido.pdf">to the PDF!</a></p>
  </object><br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='filosofie.php'">Inapoi</button>

</div>
		
</body>
</html>
