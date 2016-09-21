<?php
include('mysql_connect3.php');
$query = "SELECT * FROM korisnici where name='admin' && id!='2' ";
$result = @mysql_query($query);
if(is_resource($result)){
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

echo '
                <b>ID korisnika : <b/>'.$row['id']. '<br />
                <b>Tip korisnika : </b>
                <a href="changeadmin.php?id='.$row['id'].'">
                '.$row['name'].'<br /></a>
                <b>Email : </b>'.$row['email'].'<br />
                <b>Ime: </b>'.$row['ime'].'<br />
                <hr width="80%" />';


}
}
?>
<div align="center"><a href="admin.php?id">Zatvorite ovaj prozor</a></div>