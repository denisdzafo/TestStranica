<?php

if (isset($_GET['id'])) {

include('mysql_connect.php');

if (is_numeric($_GET['id'])) {

$id = $_GET['id'];

$query = "DELETE FROM news_posts WHERE id = $id";

$result = mysql_query($query);

if ($result) {

echo '<h3>Uspješno!</h3><br />

Vijesti su uspješno obrisane.<br /><br />';

} else {

echo 'Vijest koju ste obrisali nije moguće brisati, molimo pokušajte kasnije';

}

} else {

echo 'Odabrali ste pogrešnu vijest, molimo odaberite prabu.';

}

} else {

echo 'Prije nego posjetite ovu stranicu odaberite vijest koju želite obrisati!';
exit();
}

?>


<div align="center"><a href="admin.php?id">Zatvorite ovaj prozor</a></div>