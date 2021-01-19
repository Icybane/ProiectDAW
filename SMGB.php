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
	<h2>Scrieri Metafizice - George Berkeley</h2>
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
	
	<img src="imagini\msgb.jpg">
	<br><br>
	<a href="carti\George Berkeley - Scrieri metafizice.pdf" download> 
     
     <button class="btn">Download</button> 
     </a> 
     <br><br>
    <p>  Volumul cuprinde Tratatul despre principiile cunoașterii umane și Trei dialoguri intre Hylas și Philonous impotriva scepticilor și ateilor. În tratat Berkeley încearcă să demonstreze că lumea nu este o realitate exterioara nouă, pentru ca el nutrea prezumția că existența materiei ar fi incompatibilă cu existența lui Dumnezeu. Adversar implacabil al ateismului, Berkeley a crezut că este de datoria sa săa nege ceea ce consideră a fi suportul oricarei ireligiozitati: materia.
 <br>
 Fragment
 <br>
       Aşa după cum s-a spus că de sub Mantaua lui Gogol a ieşit întreaga literatură clasică rusă a secolului al XIX-lea, tot aşa s-a spus că principiile metafizice formulate de George Berkeley (Kilcrin, comitatul Kilkenny, Irlanda, 1685 - Oxford, 1753) au făcut cu putinţă marele efort critic al lui David Hume şi, drept urmare, întreaga filosofie a secolului al XIX- lea, ba chiar că istoria filosofiei lui Berkeley se confundă cu istoria generală a filosofiei mo-
 derne. Reflecţia criticistă a lui Kant n-a plecat doar de la scepticismul rodnic al lui Hume, ci şi de la imaterialismul excentric al lui Berkeley. „Acest subiectivism, care se revendică de la bunul-simţ — scrie Didier Julia — l-a tulburat profund pe Kant, în măsura în care bunul simţ ne învaţă în acelaşi timp că lumea este o realitate exterioară nouă, dar că este extrem de greu să o demonstrezi.” Încă şi mai greu este însă de demonstrat că lumea nu este o realitate exterioară nouă. Totuşi, Berkeley şi-a asumat această sarcină ingrată, ca să nu spu-
 nem imposibilă, deoarece el nutrea prezumţia că existenţa materiei ar fi incompatibilă cu existenţa lui Dumnezeu (şi invers). Adversar implacabil al ateismului şi al oricărei freethinking, trăind o teamă cvasimorbidă de Inchiziţie, el a crezut că este de datoria sa de bun creştin să nege ceea ce el considera a fi suportul oricărei ireligiozităţi: materia. În faţa acestei epocale iniţiative metafizice au protestat în primul rând teologii, între care influentul Samuel Clarke, autorul celebrei A Demonstration of the Being and Attributes of God (1704), iar faptul că i s-a pus în cârcă (fie şi numai în plan anecdotic) decesul intempestiv al lui Nicolas Malebranche, ca urmare a unei polemici aprige avute cu Berkeley, în chilia acelui vestit filosof creştin, la Paris, ne spune multe despre modul în care era privit imaterialismul viitorului episcop de Cloyne. Aşa se şi explică, probabil, renunţarea lui la filosofie timp de vreo două decenii, timp în care, fără a-şi slăbi deloc atacurile, gazetăreşti uneori, împotriva ateilor, s-a consacrat în primul rând unor călătorii de studii prin Europa, misionarismului în America, precum şi actelor de patriotism (în inscripţia de pe monumentul său funerar figurează şi cuvintele amans patriae). În 1721 a publicat, pe această linie, An Essay toward preventing the Ruin of Great Britain. Când a revenit la filosofie, a făcut-o cu o strălucire în primul rând literară, dând expresie unui misticism tot mai profund, pentru care avea o certă vocaţie. La un moment dat lumea îl cunoştea doar ca pe marele descoperitor al virtuţilor medicale ale „apei de gudron", despre care a scris o lucrare impozantă, nu lipsită de interes şi în plan filosofic: Siris, a Chain of Philosophical Reflections and Enquiries concerning the Virtues of Tar-water (1744). Dintre operele sale de maturitate este de semnalat şi suita de dialoguri Alciphron (The Minute Philosopher), editată în 1732, la Londra, scrise în maniera lui Platon şi chiar în viziunea metafizică a atenianului, deci irelevante.</p>
   <br><br> <br><br>
   <object data="carti\George Berkeley - Scrieri metafizice.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\George Berkeley - Scrieri metafizice.pdf">to the PDF!</a></p>
  </object><br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='filosofie.php'">Inapoi</button>

</div>
		
</body>
</html>
