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
	<h2>The Witcher 5 : Botezul focului - Andrzej Sapkowski</h2>
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
	
	<img src="imagini\witcher5.jpg">
    <br><br>
    <a href="carti\Andrzej Sapkowski - The Witcher 5. Botezul focului.pdf" download> 
     
     <button class="btn">Download</button> 
     </a> 
     <br><br>
    <p>   Complot  
  În urma incidentului Thanedd , războiul încă se dezlănțuie între Nilfgaard și Regatele de Nord. Elf Vrăjitoarea Francesca Findabair a fost instalat de către împăratul Nilfgaardian Emhyr ca regină client al Dol Blathanna. Cu toate acestea, în schimbul tronului, este obligată să refuze ajutorul comandamentelor elfice Scoia'tael , care au sprijinit avansul inițial al lui Nilfgaard în nord, dar acum se trezesc singuri și neacceptați, în timp ce Regatele Nordului ripostează.
  <br><br>Geralt <br><br>
   Geralt din Rivia își revine în pădurea Brokilon sub grija driadelor , dar el intenționează să plece cât mai repede posibil și să-l caute pe Ciri . Regina Driadelor îl prezintă lui Milva, un arcaș expert care se întinde în afara pădurii, îndrumând benzi împrăștiate de Scoia'tael spre refugiu în Brokilon. În ciuda faptului că nu-i place în mod deosebit vrăjitorul convalescent, ea este de acord să-l însoțească pe el și pe prietenul său Dandelion, în drumul său spre Nilfgaard și, sperăm, Ciri. Călătoria nu este ușoară, războiul intră aparent din toate direcțiile și aproape fiecare oraș este în flăcări.
De-a lungul călătoriei lor întâlnesc un grup de pitici condus de Zoltan Chivay. După cum se pare, toți merg în aceeași direcție, partidul lui Geralt se alătură grupului, care păstorește și câteva femei și copii refugiați. De asemenea, sunt umbrați de Cahir, „călărețul negru” care a apărut în mod evident în coșmarurile lui Ciri. Inițial, cavalerul este transportat ca prizonier de niște vânzători ambulanți, când Geralt își cruță viața pentru a doua oară. Cu toate acestea, vrăjitorul nu vrea nimic de-a face cu tânărul Nilfgaardian și îl lasă în voia sa, Cahir este mereu persistent și continuă să umbrească vrăjitorul și anturajul său. În cele din urmă, prin intervenția lui Milva, tânărul cavaler vine să se alăture grupului. În cele din urmă, trupei i se alătură Regis, un vampir cu abilități medicale neprețuite. În ciuda avocării sale de vânător de monștri, Geralt recunoaște o plăcere pentru vampir. Cahir mai dezvăluie că atât el, cât și Geralt au avut aceleași vise profetice despre Ciri, ceea ce dovedește că nu se află deloc în Nilfgaard, iar tânăra produsă de Emhyr care poartă acest nume este un impostor.
În timp ce grupul călătorește spre est, Milva recunoaște că este însărcinată, rezultatul unei scurte legături cu un grup de spiriduși pe care îi însoțea înapoi la Brokilon. La început, ea îi cere lui Regis o poțiune care să o ajute să avorteze copilul, dar apoi vorbește cu Geralt, care dezvăluie cum nu se aștepta niciodată să simtă dragoste pentru un copil până când nu va deveni responsabil pentru Ciri, iar ea decide să-și păstreze copilul. Din păcate, ei sunt prinși în mod inevitabil între fracțiunile războinice, ceea ce îi conduce în groapa Bătăliei pentru Podul de pe Yaruga, unde grupul este esențial în Queen Meve, evitând capturarea de către forțele Nilfgaardian, dar Cahir este rănit și Milva face avorturi.. Geralt se numise anterior „Geralt din Rivia”, deși nu era de fapt de acolo, totuși, după luptă, Geralt este învestit de regină și titlul său de „Rivia” devine oficial.
<br><br>Ciri<br><br>
  Ciri, sub aliasul „Falka”, s-a instalat în viață cu un grup de tineri haiduci, „Șobolanii”. Experimentând uciderea în mod regulat, ea devine în cele din urmă obsedată de asta.
  <br><br>Yennefer  <br><br>
   Odată cu prăbușirea Frăției Vrăjitorilor după incidentul Thanedd, Francesca Findabair adună un grup de vrăjitoare - inclusiv Yennefer, pe care Francesca a transformat-o într-o statuetă de jad în timpul haosului de pe Thanedd și a păstrat-o sechestrată în cele trei luni de atunci - și propune fondarea unei noi organizații, Loja Vrăjitoarelor. Francesca și Phillipa Eilhart își explică convingerea că, mai degrabă decât să acționeze în calitate de consilieri ai monarhilor diferitelor regate, abilitățile lor magice îi fac să fie cei mai calificați să se conducă singuri. Dar singurul mod în care nobilimea Regatelor de Nord ar accepta o astfel de domnie este dacă ar fi toți unificați sub un singur monarh, care posedă atât sânge regal cât și abilitate magică - adică Ciri. Cunoașterea lui Yennefer este esențială pentru găsirea lui Ciri, dar o vrăjitoare nilfgaardiană, Fringilla Vigo, o ajută pe Yennefer să scape pentru a o găsi pe Ciri singură. Spre deosebire de Geralt, Yennefer se hotărăște să-l găsească pe magul Vilgefortz, despre care crede că l-a răpit pe Ciri și căruia îi sunt răsplată pentru acțiunile sale perfide pe insula Thanedd.

     Şi atunci prezicătoarea i-a zis vrăjitorului: „Ia aminte la mine ce-ţi spun: Trage-ţi în picioare nişte ciubote de fier şi pune mâna pe un baston de fier! Du-te în ciubotele de fier unde-i vedea cu ochii, flutură bastonul şi udă cu lacrimi tot ce întâlneşti în cale! Treci prin foc şi apă, nu te opri din drum, nu te uita îndărăt! Iar când s-or ponosi încălţările, când s-o toci bastonul de fier, când vântul şi arşiţa ţi-or secătui ochii, de n-o să se mai strecoare nicio lacrimă, atunci o să dai la capătul lumii de ce cauţi şi de ce ţi-e drag. Aşa să fie!” Iar vrăjitorul a trecut prin foc şi prin apă, fără să privească înapoi. Dar nu purta nici ciubote de fier şi nu avea nici baston de fier. Îşi luase doar spada de vrăjitor. N-a ţinut seamă de cuvintele prezicătoarei. Şi bine a făcut, căci nu era nimic de capul prezicătoarei.</p>
   <br><br>
   <br><br>
   <object data="carti\Andrzej Sapkowski - The Witcher 5. Botezul focului.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\Andrzej Sapkowski - The Witcher 5. Botezul focului.pdf">to the PDF!</a></p>
  </object>
  <br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='scifi.php'">Inapoi</button>
 
</div>
		
</body>
</html>
