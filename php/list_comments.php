
<?php
header('Content-Type: text/html; charset=utf-8');
include ('mysql_connect2.php');

if (isset($_GET['id'])) {

$id = $_GET['id'];

}

$query = "SELECT * FROM comments WHERE nid = $id";

$result = @mysql_query($query);
if(is_resource($result))
    {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

echo '

<b>Datum ostavljanja komentara : <b/>'.$row['date']. '<br />
<b>Autor : </b>'.$row['autor'].'<br />
<b>Email : </b>'.$row['email'].'<br />
<b>Adresa autora : </b>'.$row['adresa'].'<br />
<b>Komentar : </b>'.$row['komentar'].'<br />
<a href="delete_comments.php?id='.$row['id'].'">Obriši komentar</a>
<hr width="80%" />';
}
    }

?>
<div align="center"><a href="admin.php?id">Zatvorite ovaj prozor</a></div>
