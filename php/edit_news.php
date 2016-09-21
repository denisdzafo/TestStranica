<?php

include('mysql_connect.php');

if ((isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {

$id = $_GET['id'];

} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) {

$id = $_POST['id'];
} else {

echo 'Izaberite vijest koju želite promjeniti';

exit();

}

if (isset($_POST['submitted'])) {

$errors = array();
    
    if (empty($_POST['slika'])) {

$errors[] = 'Zaboravili ste unjeti url slike';

} else {

$slika = $_POST['slika'];

}

if (empty($_POST['naslov'])) {

$errors[] = 'Zaboravili ste unjeti naslov';

} else {

$naslov = $_POST['naslov'];

}

if (empty($_POST['autor'])) {

$errors[] = 'Zaboravili ste unjeti autora.';

} else {

$autor = $_POST['autor'];

}

if (empty($_POST['tekst'])) {

$errors[] = 'Zaboravili ste unjeti tekst';

} else {

$tekst = $_POST['tekst'];

}
    
if (empty($_POST['detaljnije'])) {

$detaljnije = $_POST['detaljnije'];

} else {

$detaljnije = $_POST['detaljnije'];

}

if (empty($errors)) {

$query = "UPDATE news_posts SET slika ='$slika', naslov='$naslov', autor='$autor', tekst='$tekst', detaljnije='$detaljnije' WHERE id=$id";

$result = mysql_query($query);

if ($result) {

echo "Vijesti su promjenjene";
    

} else {

echo "Vijesti nisu promjenjene";

}

} else {

echo 'Vijesti nije moguce promjeniti iz sljedecih razloga -<br />';

foreach ($errors as $msg) {

echo " - $msg<br />\n";

}

}

} else {

$query = "SELECT slika, naslov, autor, tekst, detaljnije, id FROM news_posts WHERE id=$id";

$result = mysql_query($query);

$num = mysql_num_rows($result);

$row = mysql_fetch_array ($result, MYSQL_NUM);

$slika =$row['0'];
$naslov = $row['1'];

$autor = $row['2'];

$tekst = $row['3'];
    
    $detaljnije=$row['4'];


if ($num == 1) {

echo '<h3>Promjeni vijesti</h3>

<form action="?id=edit_news&num='.$id.'" method="post">

<p>Url slike : <input type="text" name="slika" size="25" maxlength="255" value="'.$slika.'" /></p>

<p>Naslov vijesti : <input type="text" name="naslov" size="25" maxlength="255" value="'.$naslov.'" /></p>

<p>Autor : <input type="text" name="autor" size="15" maxlength="255" value="'.$autor.'" /></p>

<p>Tekst : <br /><textarea rows="5" cols="40" name="tekst">'.$tekst.'</textarea></p>

<p>Detaljnije : <br /><textarea rows="5" cols="50" name="detaljnije">'.$detaljnije.'</textarea></p>

<p><input type="submit" name="submit" value="Promjeni" /></p>

<input type="hidden" name="submitted" value="TRUE" /></p>

<input type="hidden" name="id" value="'.$id.'" />';

} else {

echo 'Nije moguće promjeniti vijesti, pokušajte kasnije';
}

}

?>

<div align="center"><a href="admin.php?id">Zatvorite ovaj prozor</a></div>