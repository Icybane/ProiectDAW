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
	<h2>Întrebările sunt de fapt răspunsuri de Allan Pease</h2>
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
	
	<img src="imagini\idr.png">
    <br><br>
    <a href="carti\Allan Pease - Intrebarile sunt defapt raspunsuri.pdf" download> 
     
     <button class="btn">Download</button> 
     </a> 
     <br><br>
    <p> Allan Pease este cel mai cunoscut expert din lume in limbajul trupului. Folosind cunostintele din acest domeniu, el prezinta o remarcabila tehnica de construire a unei retele de vanzari. Daca va veti insuti strategiile prezentate, veti sti cum sa construiti o afacere care sa va aduca multe satisfactii. Chiar daca nu faceti parte dintr-o retea de vanzari, abilitatile de comunicare prezentate pot eficientiza modul in care abordati o negociere. Metodele lui Allan Pease functioneaza, fie ca sunt folosite de persoane din mediul financiar sau de afaceri, de avocati, de manageri sau de asistenti sociali. Distrati-va invatand cu Allan Pease si veti sti ca prin minune cum sa va valorificati mai bine imaginea personala.Allan Pease: De ce am scris aceasta carte? Cand am fost introdus pentru prima oara intr-o Retea de Vanzari, in 1980, am fost uluit ca poate exista o oportunitate atat de extraordinara, care sa fie in acelasi timp simpla, legala, morala, distractiva si profitabila. Âªi nu era vorba despre una dintre acele scheme de imbogatire rapida - era un sistem de a deveni bogat. 
       <br><br>(...)  Aceasta carte este rezultatul mai multor ani in care am adaptat, modificat, testat si aplicat aceste tehnici la Retele de Vanzari. Va veti da seama ca e usor si simplu sa deprindeti aceste abilitati care va vor propulsa spre marele succes, asa cum se intampla cu mii de alti oameni, la fel ca voi, chiar in acest moment.Un lucru foarte important este ca nu va trebui sa schimbati ceva din ceea ce ati invatat deja pana acum. Cu doua ore de studiu si cu ceva practica va puteti dezvolta afacerea pana la un nivel ce va va ului.     
       <br><br>Exista atat de multe carti si inregistrari excelente despre cum sa-ti stabilesti intalnirile sau cum sa-ti prezinti planul de afaceri, incat aceste subiecte nu vor fi tratate aici in profunzime. Aceasta carte iti arata exact ce sa faci, ce sa spui si cum sa spui pentru a-i face pe clientii probabili sa spuna da la intalnirile fata in fata. </p>
   <br><br> <br><br>
   <object data="carti\Allan Pease - Intrebarile sunt defapt raspunsuri.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\Allan Pease - Intrebarile sunt defapt raspunsuri.pdf">to the PDF!</a></p>
  </object><br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='psihologie.php'">Inapoi</button>

</div>
		
</body>
</html>
