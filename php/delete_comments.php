
<?php
header('Content-Type: text/html; charset=utf-8');

if (isset($_GET['id'])) {

include('mysql_connect2.php');

if (is_numeric($_GET['id'])) {

$id = $_GET['id'];

$query = "DELETE FROM comments WHERE id = $id";

$result = mysql_query($query);

if ($result) {

echo '<h3>Uspješno!</h3><br />

Komentar je uspješno obrisan.<br /><br />';

} else {

echo 'Komentar koji ste obrisali nije moguće brisati, molimo pokušajte kasnije';

}

} else {

echo 'Odabrali ste pogrešnan komentar, molimo odaberite pravu.';

}

} else {

echo 'Prije nego posjetite ovu stranicu odaberite komentar koji želite obrisati!';

}

?>


<div align="center"><a href="admin.php?id">Zatvorite ovaj prozor</a></div>
