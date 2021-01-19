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
	<h2>Hoțul de Umbre - Marc Levy</h2>
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
	
	<img src="imagini\hotul.jpg">
    <br><br>
    <a href="carti\Marc Levy - Hotul de umbre.pdf" download> 
     
     <button class="btn">Download</button> 
     </a> 
     <br><br>
    <p>’’Există oameni care nu îmbrăţişează decât umbre; aceştia nu cunosc decât umbra fericirii.’’ (William Shakespeare)<br>
          ’’Ştii, lucrul de care dragostea are cea mai mare nevoie este imaginaţia. Trebuie ca fiecare să-i inventeze –cu toată forţa imaginaţiei sale –pe celălalt şi să nu-i cedeze realităţii nicio palmă de teren. Ei, şi atunci când cele două imaginaţii se întâlnesc…nu există nimic mai frumos pe lume.’’ (Romain Gary)
           Şi până la urmă nu toţi suntem nişte umbre lipsite de viaţă? Nişte umbre care se perindă de ici colo fără a-şi stabili traiectoria cu certitudine? Nişte pete de întuneric pe pământ?
          <br>O povestioară uşoară, care te atrage s-o citeşti. Hoţul de umbre e mai mult decât atât, e mai mult decât o comedioară în care un copil de 12-13 ani fură şi se joacă cu umbrele altora. Eu o văd ca o misiune, dorinţele şi suferinţele altora, devin rând pe rând ale lui.
            <br>Te lasă cu zâmbetul pe buze nu pentru că povestea băiatului care ”fura” umbre ar putea fi reală, nici pentru că marea iubire și întâlnirea cu ea te convinge, ci pentru că te-a păcălit. Ți-a livrat o poveste îndulcită (facilă) despre viață, dragoste, traume și tragedii și, cumva, te-a ținut acolo până la ultima pagină (între noi fie vorba, dacă încerci să găsești un sens înalt literaturii lui, poți). Cu sau fără scăpări de stil, soluții mai mult sau mai puțin credibile, filosofie de mase, scriitorul francez îți mângâie inima îmbibată în filme de Hollywood. Și nu regreți c-ai ”pierdut” două-trei ore în compania lui. Cam asta este treaba cu fiecare carte de-a lui Marc Levy.
 Top cele mai citite cărți categoria: Detectivi!  </p>
   <br><br> <br><br>
   <object data="carti\Marc Levy - Hotul de umbre.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\Marc Levy - Hotul de umbre.pdf">to the PDF!</a></p>
  </object><br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='actiune.php'">Inapoi</button>

</div>
		
</body>
</html>
