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
	<h2>Psihologia minciunii de M. Scott Peck</h2>
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
	
	<img src="imagini\psm.jpg">
	<br><br>
	<a href="carti\M._Scott_Peck_-_Psihologia_Minciunii.pdf" download> 
     
     <button class="btn">Download</button> 
     </a> 
     <br><br>
    <p>  O carte tulburătoare, fascinantă, ce redeschide vechea discuție despre esența răului uman. Deși de- a lungul timpului această problematică a fost dezbatută mai degraba de filozofie și religie, avem acum o altă abordare - din perspectiva unui psihiatru cu o remarcabilă deschidere interdisciplinară. Un tur de orizont asupra naturii umane, un dialog deschis între psihologie și religie. Cazurile clinice prezentate aici, manifestări ale răului în viața cotidiană, deși la prima vedere pot fi catalogate drept maladii psihice, la o analiză psihiatrică atentă refuză să se înscrie în categoriile standard ale psihologiei sau psihiatriei. Minciuna este trasatura cea mai relevantă a răului ce salasluiește în oameni, ea fiind atît un simptom, cît și o cauză a răului. Deși oamenii consideră în general că psihoterapia și exorcismul sunt lucruri complet diferite, Scott Peck ne demonstrează că amandouă sunt niște procese psihoterapeutice, atît ca metodă, cît și ca rezultat. Diferența majoră dintre cele două constă în faptul ca în cazul psihoterapiei există o libertate totală, pacientul putînd să încheie ședința oricînd dorește. Nu același lucru se întamplă în cazul exorcizării. In acest caz, pacientul se află la discreția celui care conduce ședința și nu poate să întrerupă singur procesul de exorcizare, ceea ce il poate transforma într- o victimă, pentru ca exorcismul este pînă la urmă un război spiritual. La limita dintre știință și religie, Psihologia minciunii îi oferă cititorului o nouă perspectivă asupra unor subiecte controversate, iar în final îi poate schimba chiar viziunea asupra vieții. </p>
   <br><br> <br><br>
   <object data="carti\M._Scott_Peck_-_Psihologia_Minciunii.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\M._Scott_Peck_-_Psihologia_Minciunii.pdf">to the PDF!</a></p>
  </object><br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='psihologie.php'">Inapoi</button>

</div>
		
</body>
</html>
