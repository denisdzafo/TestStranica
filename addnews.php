<?php
header('Content-Type: text/html; charset=utf-8');
if (isset($_GET['id'])) {
}
 else {

echo 'Niste logovani kao administrator';

exit();

}
if (isset($_POST['submitted'])) {
include ('mysql_connect.php');
$naslovbool=false;
$autorbool=false;
$tekstbool=false;
$slikabool=false;

    if (empty($_POST['slika'])) {
echo '<p><font color="red">Zaboravili ste unjeti url slike</font></p>';
} else {
$slika = $_POST['slika'];
    $slikabool=true; 
}
    
if (empty($_POST['naslov'])) {
echo '<p><font color="red">Zaboravili ste unjeti naslov</font></p>';
} else {
    $naslov = htmlspecialchars($_REQUEST['naslov'], ENT_QUOTES, 'UTF-8');

    $naslovbool=true; 
}
    if (isset($a['naslov'])) {
        $a= htmlEntities($_GET['a'], ENT_QUOTES);
		print "<p>Poslali ste: ".$a['naslov']."</p>";
		 
      } 
    
if (empty($_POST['autor'])) {
echo '<p><font color="red">Zaboravili ste unjeti autora</font></p>';
} else {
$autor = htmlspecialchars($_REQUEST['autor'], ENT_QUOTES, 'UTF-8');
    $autorbool=true;
}
if (empty($_POST['tekst'])) {
echo '<p><font color="red">Zaboravili ste unjeti tekst.</font></p>';
} else {
$tekst = htmlspecialchars($_REQUEST['tekst'], ENT_QUOTES, 'UTF-8');
    $tekstbool=true;
}
    
if (empty($_POST['detaljnije'])) {
$detaljnije = htmlspecialchars($_REQUEST['detaljnije'], ENT_QUOTES, 'UTF-8');
} else {
$detaljnije = htmlspecialchars($_REQUEST['detaljnije'], ENT_QUOTES, 'UTF-8');
}

if ($naslovbool && $autorbool && $tekstbool && $slikabool) {
$query = "INSERT INTO news_posts (slika, naslov, autor, tekst, detaljnije, datum) VALUES ('$slika', '$naslov', '$autor', '$tekst', '$detaljnije', NOW())";
$result = @mysql_query($query);
if ($result) {
echo '<p><font color="red">Vijesti su dodane!</font></p>';
} else {
echo '<font color="red"><p>Vijesti nisu dodane! Molimo pokušajte kasnije.</p></font>';
}
} else {
echo '<p><font color="red">Molimo unesite informacije</font></p>';
}
}
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    
<p><b>Url slike :</b><br />
<input type="input" name="slika" size="25" maxlength="60" value="<?php if(isset($_POST['slika'])) echo $_POST['slika']; ?>" /></p>
    
<p><b>Naslov vijesti :</b><br />
<input type="input" name="naslov" size="25" maxlength="60" value="<?php if(isset($_POST['naslov'])) echo $_POST['naslov']; ?>" /></p>
    
<p><b>Autor :</b><br />
<input type="input" name="autor" size="15" maxlength="35" value="<?php if(isset($_POST['autor'])) echo $_POST['autor']; ?>" /></p>
    
<p><b>Tekst :</b><br />
<textarea rows="7" cols="55" name="tekst"><?php if(isset($_POST['tekst'])) echo $_POST['tekst']; ?></textarea></p>
    
<p><b>Detaljnije :</b><br />
<textarea rows="7" cols="55" name="detaljnije"><?php if(isset($_POST['detaljnije'])) echo $_POST['detaljnije']; ?></textarea></p>
    
<p><input type="submit" name="submit" value="Dodaj vijesti" /></p>
<input type="hidden" name="submitted" value="TRUE" /></p>
</form>

<div align="center"><a href="admin.php?id">Zatvorite ovaj prozor</a></div>