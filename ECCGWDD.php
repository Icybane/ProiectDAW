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
	<h2>Esti ceea ce gandesti - Wayne D Dyer</h2>
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
	
	<img src="imagini\ecgd.jpg">
    <br><br>
    <a href="carti\Esti ceea ce gandesti - Wayne Dyer.pdf" download> 
     
     <button class="btn">Download</button> 
     </a> 
     <br><br>
    <p>    Cu 500 de ani înainte de Cristos, filozoful chinez Lao zi a scris 81 de versete despre natura umană şi felul în care oamenii trebuie să-şi trăiască viaţa şi să-şi îndeplinească menirea. Adunate într-o carte numita Tao Te King, ele constituie un îndrumar către o viaţă echilibrată din punct de vedere moral şi spiritual, vizînd, în permanenţă, binele.
     Recurgand la multe traduceri moderne ale vechii lucrări chinezesti, dr. Wayne W. Dyer a realizat o versiune personala a celebrelor versete, careia i-a adăugat o interpretare adecvată zilelor noastre. Rezultatul este un indreptar de gîndire şi acţiune care imbină îndemnul antic la pace şi linişte interioară cu imperativele lumii actuale orientate spre dinamism şi dezvoltare continuă.
     Meditînd asupra mesajului lui Lao zi, Wayne Dyer a alcătuit o carte care îşi propune să transmită omului modern roadele unei înţelepciuni vechi de milenii.
     Esenţa cărţii de faţă este definită exemplar de autorul ei, dr. Wayne W. Dyer: „In mai puţin de o sută de paragrafe scurte, acest text descrie un mod de viaţă absolut echilibrat, atît moral, cît şi spiritual. Iar metoda de faţă funcţionează pentru orice înseamnă viaţă pe acest pămînt.“
   Aprofundînd învăţăturile din această carte, veţi ajunge să întelegeţi vechiul adevăr din spatele cuvintelor taoiste: „Cînd schimbi felul în care priveşti lucrurile, lucrurile la care te uiţi se schimbă.“
     Parcurgeţi această carte în tihnă. Aşa cum spune autorul, este o carte care vă va schimba fundamental perspectiva asupra propriei vieţi, determinîndu-vă să vă duceţi existenţa în deplină armonie cu natura. Aveţi, acum, ocazia să descoperiţi cum puteţi avea o viaţă mai fericită, mai inspirată şi mai plină de speranţă.
Date
    Dr. Wayne W. Dyer este autor şi conferenţiar de renume internaţional în domeniul dezvoltării personale. Are un doctorat în consiliere educaţională la Wayne State University şi, un timp, a fost profesor asociat la St. John’s University din New York. Dyer este autor a 30 de cărţi, a numeroase programe pe suport audio şi video şi a apărut în mii de emisiuni de radio şi televiziune. Cărţile Manifest your destiny, Wisdom of ages, There’s a Spiritual Solution to Every Problem şi bestsellerurile desemnate de publicaţia New York Times: 10 Secrets for Success and Inner Peace, The Power of Intention şi Inspiration au marcat nu doar piaţa editorială americană, ci şi percepţia publică a unui domeniu de activitate: educaţia. în consecinţă, Wayne Dyer este supranumit în SUA „părintele motivaţiei".</p>
   <br><br> <br><br>
   <object data="carti\Esti ceea ce gandesti - Wayne Dyer.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\Esti ceea ce gandesti - Wayne Dyer.pdf">to the PDF!</a></p>
  </object><br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='filosofie.php'">Inapoi</button>

</div>
		
</body>
</html>
