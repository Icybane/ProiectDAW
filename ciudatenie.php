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
	<h2>O ciudăţenie a minţii mele de Orhan Pamuk</h2>
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
	
	<img src="imagini\ciudatenie.jpg">
    <br><br>
    <a href="carti\O ciudatenie a mintii mele - Orhan Pamuk.pdf" download> 
     
         <button class="btn">Download</button> 
         </a> 
         <br><br>
    <p> Biografie<br><br>
    ORHAN PAMUK s-a născut în 1952, la Istanbul, şi a crescut într-o familie numeroasă, asemănătoare acelora pe care le descrie în romanele Cartea neagră şi Cevdet Bey şi fiii săi, într-o zonă înstărită din Nişantaşı. La 23 de ani, Orhan Pamuk se hotărăşte să devină romancier; trăieşte retras în apartament şi începe să scrie. Cu excepţia unei perioade de trei ani petrecute la New York, el a locuit numai la Istanbul. Scrie romane de treizeci de ani şi nu a avut niciodată altă meserie. Cărţile i-au fost traduse în mai mult de cincizeci de limbi, iar unul dintre cele mai apreciate romane ale sale, Mă numesc Roşu, a câştigat în anul 2003 IMPAC Dublin Literary Award. În 2006, Orhan Pamuk a primit Premiul Nobel pentru Literatură, fiind printre cei mai tineri laureaţi ai acestuia.
<br><br>
   Prima carte publicată de Orhan Pamuk după dobândirea Premiului Nobel pentru Literatură (2006), O ciudăţenie a minţii mele este o epopee modernă, desfăşurată pe parcursul a mai bine de patru decenii (1969-2012), în centrul căreia se află unul dintre milioanele de „personaje secundare” ale Istanbulului: iaurgiul şi bragagiul Mevlut Karatas. Povestea adeseori înduioşătoare a contraeroului Mevlut Karatas, cu bucuriile, sensibilităţile, izbânzile şi, mai ales, eşecurile sale, este de fapt povestea „celuilalt Istanbul”, a vânzătorilor stradali, a cartierelor de barăci, a imigranţilor din Anatolia care ajung să schimbe, treptat, textura şi stilul de viaţă tradiţional al oraşului, pe vălul ambiguu al pribegiilor moderne. Modernizarea oraşului, petrecută pe fundalul eternelor frământări politice, se asociază cu dispariţia unor îndeletniciri tradiţionale, cu modificarea dramatică a peisajului uman, cu nenumărate înfrângeri personale, nevăzute şi neştiute, care marchează destinele „generaţiilor pierdute” ale Istanbulului contemporan.
</p>
   <br><br> <br><br>
   <object data="carti\O ciudatenie a mintii mele - Orhan Pamuk.pdf" type="application/pdf" width="100%" height="850">
    <p>Mergi la pdf <a href="carti\O ciudatenie a mintii mele - Orhan Pamuk.pdf">to the PDF!</a></p>
  </object><br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='actiune.php'">Inapoi</button>

</div>
		
</body>
</html>
