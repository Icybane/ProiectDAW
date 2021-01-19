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
	<h2>The Witcher 4 : Vremea Dispretului - Andrzej Sapkowski</h2>
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
	
	<img src="imagini\witcher4.jpg">
    <br><br>
    <a href="carti\Andrzej Sapkowski - The Witcher 4. Vremea disprețului.pdf" download> 
     
     <button class="btn">Download</button> 
     </a> 
     <br><br>
    <p>   În lumea lui Geralt, nu doar monștrii din umbre amenință pacea, ci înșiși oamenii, regii și armatele lor, dezertorii și rebelii, fiecare cu propriul interes. Bine ascunși în inima pădurii, elfii și alte creaturi pînă atunci oprimate cîștigă tot mai mulți adepți și lanseaza tot mai multe atacuri-surpriză. Magicienii se luptă între ei, își pun la dispoziție puterile pentru prețul cel mai mare sau simpatizează cu elfii rebeli. Pentru Geralt și Yennefer e tot mai greu să-și țină promisiunea: aceea de a o proteja pe Ciri de oricine și orice ar vîna-o, pentru ca ea este cheia salvării lumii întregi. Dar cu intrigi și dușmani la fiecare colț, Ciri va fi nevoită să se apere singura și să-și folosească puterile care-i fac atît de mult rău. 
„La fel ca o vrajă complicată, romanul lui Sapkowski este un amestec de fantasy, discurs intelectual și umor negru.“ Time 
   „Din vîrtejul de siluete vagi, tulburătoare, de scene bizare, de rău augur și de sunete și cuvinte de neînțeles, dar înfricoșătoare a aparut brusc o imagine clară și bine definită. Ciri. 
<br><br>
Diferita de cea cunoscută de el la Kaer Morhen. Părul ei cenușiu, zbîrlit din cauza galopului, era mai lung – așa cum îl purta atunci cînd o întîlnise prima oara în Brokilon. Cînd trecea călare, voia s-o strige, dar vocea nu-l ascultă deloc. Voia să alerge după ea, dar avea impresia că de la brîu în jos e prins în smoală întărită. Și Ciri parcă nu-l vedea, galopă departe în noapte, între arini grotești și salcii, cu crengile zbătîndu-se de parcă ar fi avut viața. Și a văzut că sunt urmariți. Ca în spatele ei galopă un cal negru, cu un cavaler în armura neagră, cu un coif cu aripi de pasăre de pradă.“
      </p>  <br><br>
   <object data="carti\Andrzej Sapkowski - The Witcher 4. Vremea disprețului.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\Andrzej Sapkowski - The Witcher 5. Botezul focului.pdf">to the PDF!</a></p>
  </object>
 
   <br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='scifi.php'">Inapoi</button>

</div>
		
</body>
</html>
