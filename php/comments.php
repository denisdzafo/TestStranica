<html>
<head>
  
</head>
 <body>
     
<?php
header('Content-Type: text/html; charset=utf-8');
include ('mysql_connect2.php');

if (isset($_GET['id'])) {

$id = $_GET['id'];

} else {

echo 'Odaberite vijest na koju želite ostaviti komentar.';

exit();

}
$brojac=$id;

$query = "SELECT * FROM comments WHERE nid = $id";
 session_start();

$result = @mysql_query($query);
if(is_resource($result))
    {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            if (empty($row['email'])) {
                echo '
                <b>Datum ostavljanja komentara : <b/>'.$row['date']. '<br />
                <b>Autor : </b>'.$row['autor'].'<br />
                <b>Adresa autora : </b>'.$row['adresa'].'<br />
                <b>Komentar : </b>'.$row['komentar'].'<br />
                <hr width="80%" />';
            }
            else{
                echo '
                <b>Datum ostavljanja komentara : <b/>'.$row['date']. '<br />
                <b>Autor : </b>'.$row['autor'].'<br /></a>
                <a href="mailto:'.$row['email'].'">
                <b>Email : </b>'.$row['email'].'</a><br />
                <b>Adresa autora : </b>'.$row['adresa'].'<br />
                <b>Komentar : </b>'.$row['komentar'].'<br />
                <hr width="80%" />';
            }
        }
    }


if (isset($_POST['submitted'])) {

$errors = array();

if (empty($_POST['autor'])) {
if (isset($_SESSION['ime'])) 
{ $username= $_SESSION['ime'];
  $autor=$username;
}else
    $errors[] = '<font color="red">Molimo unesite vase ime</font>';

}

 else {
$autor = htmlspecialchars($_REQUEST['autor'], ENT_QUOTES, 'UTF-8');

}
    if (empty($_POST['email'])) {

        $email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');

} 
    else {       
        $validno = true;
        $email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
        if(!preg_match("/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]/i",$email))
			{    
                $validno = false;
			}
        if(!$validno){
            $errors[] = '<font color="red">Molimo unesite ispravan format emaila</font>';
        }
}
    if (empty($_POST['adresa'])) {

$errors[] = '<font color="red">Molimo unesite vašu adresu</font>';

} else {

$adresa = htmlspecialchars($_REQUEST['adresa'], ENT_QUOTES, 'UTF-8');


}

if (empty($_POST['komentar'])) {

$errors[] = '<font color="red">Molimo unesite vaš komentar</font>';

} else {

$komentar = htmlspecialchars($_REQUEST['komentar'], ENT_QUOTES, 'UTF-8');

}

if (empty($errors)) {

$query = "INSERT INTO comments (nid, autor, email, adresa, komentar, date) VALUES ($id, '$autor', '$email', '$adresa', '$komentar', NOW())";
$result = @mysql_query($query);

if ($result) {
echo '<font color="blue">Vaš je komentar dodan</font>';
echo '<div align="center"><a href="comments.php?id='.$brojac.'">Dodajte još komentara</a></div>';
} else {

echo '<font color="red">Dogodila se neka greška, molimo pokušajte kasnije</font>';

}

} else {

echo '<b>Postoji nekoliko grešaka -</b><br />';

foreach ($errors as $msg) {

echo " - $msg<br />\n";

}
echo '<div align="center"><a href="comments.php?id='.$brojac.'">Vratite se nazad</a></div>';
}

} else {

?>

   
<?php if (isset($_SESSION['ime'])) include 'korisnikAutor.php'; else include 'loginAutor.php'?>


<?php

}

?>
      <script type="text/javascript">
  setTimeout(function () { location.reload(true); }, 15000);
</script>   
<div align="center"><a href="javascript:window.close()">Zatvorite ovaj prozor</a></div>
</body>

</html>