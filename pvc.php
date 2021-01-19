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
	<h2>Psihopatologia vieții cotidiene de Sigmund Freud</h2>
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
	
	<img src="imagini\pvc.jpg">
    <br><br>
    <a href="carti\Psihopatologia vietii cotidiene  - Sigmund Freud.pdf" download> 
     
     <button class="btn">Download</button> 
     </a> 
     <br><br>
    Deși analizele din Psihopatologia vieții cotidiene par rezultatele unui exercițiu minor, lucrarea joacă un rol important în interiorul edificiului psihanalizei. Împreună cu Interpretarea visului și Cuvîntul de spirit și relațiile sale cu inconștientul (1905), studiul actelor ratate a demonstrat că inconștientul nu constituie apanajul celor atinși de disfuncția nevrotică, ci este prezent la toți oamenii. Diferențele dintre sănătate și boala psihică nemaifiind de natură, ci doar de grad, pe temeiul psihopatologiei se poate construi o psihologie a stării de sănătate (psihologia inconștientului) și se poate cerceta cultura din perspectiva manifestărilor inconștientului (psihanaliza aplicată).
<br><br>
    Actele ratate, considerate de opinia comună rezultatul hazardului, îi oferă lui Freud dezvoltări extinse despre determinismul psihic. În timp ce explicația prin hazard priveaza actul ratat de sens, la fel ca teoriile prefreudiene (fiziologice si fonetice), viziunea psihanalitică îl plasează în rîndul fenomenelor psihice, adica al fenomenelor cu sens. Căci, spre deosebire de lumea exterioară, unde există hazard, în plan psihic determinismul este riguros, chiar daca uneori multiplu mediat. 
<br>
Fragment<br><br>
    La începuturile psihanalizei a fost inconştientul patogen: tratând paciente isterice, Freud a descoperit că suferinţa lor era provocată de „reminiscenţe“, adică de amintiri cu o puternică încărcătură afectivă aflate în afara câmpului conştiinţei, din cauza caracterului lor traumatic. Reactualizarea amintirii şi descărcarea afectului (catharsis) constituie soluţia propusă în Studii asupra isteriei, actul de naştere al psihanalizei. Chiar dacă Freud a trecut rapid de la metoda cathartică la asocierea liberă, metoda specifică psihanalizei, inconşti- entul rămâne marcat în perioada de început de o cono- taţie negativă. În acelaşi timp, pentru cititorul neiniţiat s-ar putea naşte ideea că doar nevroticii au inconştient, în timp ce oamenii sănătoşi sunt lipsiţi de un astfel de pericol interior. Constatând că, în timpul terapiilor, pacienţii care asociau în marginea simptomelor aduceau adesea în discuţie vise, Freud a presupus că între vis şi simptom există o strânsă legătură. Ipoteza i-a fost curând con- firmată: atât din punctul de vedere al conţinuturilor, Freud cât şi din punctul de vedere al structurii, simptomul şi visul sunt foarte apropiate. Conţinuturile inconştiente sunt identice: tendinţe instinctuale (sexuale, agresive, de autoafirmare) neacceptate cultural. Structura visului este, de asemenea, identică structurii simptomului: un conţinut manifest accesibil conştiinţei şi un conţinut latent în care dimensiunea inconştientă este hotărâ- toare. Deosebirea constă, pe de o parte, în durată — visul este un „simptom“ pasager, în timp ce simptomul este un „vis“ care devine permanent, iar pe de altă parte, în aceea că suferinţa este asociată indestructibil simptomului, în timp ce visul nu provoacă decât uneori suferinţă de scurtă durată (coşmarul). Cum visul este un fenomen psihic de largă răspândire în lumea oamenilor sănătoşi, Freud făcuse încă din 1900, anul apariţiei cărţii sale Interpretarea viselor, primul pas către psihopatologia vieţii cotidiene. Cartea pe care întemeietorul psihanalizei o va intitula astfel şi care apare în 1901 va avea ca obiect un alt fenomen al vieţii psihice normale, şi anume actele ratate. În măsura în care citirea greşită, audiţia greşită, pronunţia greşită, uitarea sau pierderea de obiecte etc., toate variante ale actului ratat, sunt întâlnite de noi la tot pasul în viaţa de zi cu zi, inconştientul care le alimentează, aşa cum stă şi la baza simptomului sau a visului, devine un câmp psihic ale cărui manifestări, mai clare sau mai obscure, sunt omniprezente. Simptomele noastre de toate zilele au aceeaşi structură şi conţinuturi cu simptomul şi visul, deosebirea faţă de simptom constând în durata scurtă şi în faptul că funcţiile psihice afectate sunt neesenţiale. Ceea ce înseamnă că simţul realităţii rămâne intact. Totuşi, uneori actele ratate pot periclita chiar viaţa autorului lor, în această situaţie aflându-se acelea dintre ele în spatele cărora se află ten- dinţe autodistructive (sinucigaşe).  </p>
   <br><br> <br><br>
   <object data="carti\Psihopatologia vietii cotidiene  - Sigmund Freud.pdf" type="application/pdf" width="100%" height="850">
    <p>Alternative text - include a link <a href="carti\Psihopatologia vietii cotidiene  - Sigmund Freud.pdf">to the PDF!</a></p>
  </object><br><br>
    <button class="btn" onclick="window.location.href='index.php'">Intoarce-te acasa</button>
    <button class="btn" onclick="window.location.href='psihologie.php'">Inapoi</button>

</div>
		
</body>
</html>
