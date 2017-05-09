
<?php

header('Content-Type: text/html; charset=utf-8');

include ('mysql_connect3.php');
if (isset($_GET['id'])) {

$id = $_GET['id'];

}
$mail="";
$promjenakorisnika="admin";
$promjenakorisnika2="korisnik";
$query = "SELECT * FROM korisnici WHERE id = $id";

$result = @mysql_query($query);
if(is_resource($result))
    {
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            	$mail=$row['email'];
echo '

                <b>ID korisnika : <b/>'.$row['id']. '<br />
                <b>Tip korisnika : </b>
                '.$row['name'].'<br /></a>
                <b>Email : </b>'.$row['email'].'<br />
                <b>Ime: </b>'.$row['ime'].'<br />
                <hr width="80%" />';
}
    }

if (isset($_POST['submitted'])) {
    $query = "UPDATE korisnici SET name='$promjenakorisnika2' WHERE id=$id";

    $result = mysql_query($query);

if ($result) {

echo "Uloga korisnika je promjenjena";
    

} else {

echo "Uloga korisnika nije promjenjena";

}
}

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    
    <p><input type="submit" name="submit" value="Promjeni ulogu korisnika" /></p>
<input type="hidden" name="submitted" value="TRUE" /></p>
</form>
<div align="center"><a href="destroyadmin.php">Zatvorite ovaj prozor</a></div>