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
	<h2>The Witcher 2 : Sabia Destinului - Andrzej Sapkowski</h2>
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
	
	<img src="imagini\witcher2.jpg">
	<br><br>
	<a href="carti\Andrzej Sapkowski - The Witcher 2. Sabia destinului.pdf" download> 
     
     <button class="btn">Download</button> 
     </a> 
     <br><br>
    <p>  Geralt este un vînător. Un om ale cărui puteri magice, obținute prin antrenamente îndelungate și cu ajutorul unui elixir misterios, l-au transformat într-un luptător genial și într-un asasin fără milă.

Dar nu este un ucigaș ca oricare altul: țintele lui sunt monștrii care bîntuie pămanturile și îi atacă pe inocenți. Asa ca el cutreiera tinutul în căutarea lor, pînă caîd își dă seama că nu toți monștrii sunt la fel: unii sunt răi pînaă în măduva oaselor, dar alții sunt doar victime ale păcatului, ale răului sau ale naivității. 
<br><br>
Biografie<br><br>
ANDRZEJ SAPKOWSKI s-a născut pe 21 iunie 1948 în Łódź, Polonia. A studiat economia şi a lucrat ca agent de vânzări pentru o companie străină. A tradus literatură Science fiction şi în 1986 a scris prima povestire în glumă, dar textul a fost publicat imediat în revista Fantastyka. A devenit apoi scriitor full time, cucerind şi publicul larg, şi criticii literari. Vorbind despre începuturi, scriitorul povestea: „Când am început să scriu eu. Polonia nu avea scriitori de fantasy. Eu am fost un pionier. Nu e lipsă de modestie, e adevărul: a trebuit să inventez literatura fantasy în Polonia. A trebuit să las în urmă lecturile mele din domeniu, tot ce ştiam despre fantasy, căci cititorul polonez, care e pretenţios, nu voia să accepte hibrizi, cărţi la mijlocul drumului dintre fantasy şi alte genuri sau pur şi simplu o imitaţie după Tolkien. Căuta ceva nou, ceva special. Nerăbdarea lui de a descoperi ceva nou, ceva special, m-a făcut să scriu.” Literatura pe care o scrie de peste două decenii are mare succes în ţara natală şi în străinătate, iar cărţile sale se vând în milioane de exemplare, Andrzej Sapkowski fiind unul dintre cei mai cunoscuţi şi cei mai îndrăgiţi autori polonezi de azi, cărţile sale fiind traduse în multe limbi. Faima i-a adus-o seria Wiedźmin, cunoscută sub titlul The Witcher şi popularizată la scară largă datorită jocurilor video cu acelaşi nume, care se bucură de un succes răsunător. Saga care l-a consacrat cuprinde trei volume de povestiri, publicate în mai multe ediţii şi sub mai multe titluri. Ostatnie źyczenie – 1993 (Ultima dorinţă) a apărut iniţial sub titlul Wiedźmin în 1990. Au urmat volumele Miecz przeznaczenia – 1992 (Sabia destinului) şi Krew elfów – 1994 (Sângele elfilor). Seriei i s-au adăugat, în timp, şi alte cărţi, iar autorul a semnat şi alte volume de proză scurtă şi romane, printre care, cel mai recent, Źmija (2009), a cărui poveste se petrece în Afganistan. Autorul a câştigat numeroase premii prestigioase. A primit două distincţii de la The European Science Fiction Society şi cinci premii Zajdel. În anul 2012 i s-a decernat Medalia de Merit pentru Cultură Gloria Artis în Polonia.
      </p> <br><br>
   <object data="carti\Andrzej Sapkowski - The Witcher 2. Sabia destinului.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\Andrzej Sapkowski - The Witcher 2. Sabia destinului.pdf">to the PDF!</a></p>
  </object>
   <br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='scifi.php'">Inapoi</button>

</div>
		
</body>
</html>
