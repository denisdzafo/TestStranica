<?php
header('Content-Type: text/html; charset=utf-8');
if (isset($_POST['submitted'])) {
include ('mysql_connect3.php');
$emailbool=false;
$imebool=false;
$passbool=false;
$name="korisnik";

    
    
if (empty($_POST['ime'])) {
echo '<p><font color="red">Zaboravili ste unjeti ime</font></p>';
} else {
$ime = htmlspecialchars($_REQUEST['ime'], ENT_QUOTES, 'UTF-8');
    $imebool=true;
}
    if (empty($_POST['pass'])) {
echo '<p><font color="red">Zaboravili ste unjeti password</font></p>';
} else {
$pass = htmlspecialchars($_REQUEST['pass'], ENT_QUOTES, 'UTF-8');
    $passbool=true;
}
 if (empty($_POST['email'])) {

        echo '<p><font color="red">Zaboravili ste unjeti email</font></p>';

} 
    else {       
        $validno = true;
        $email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
        if(!preg_match("/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]/i",$email))
			{    
                $validno = false;
			}
        if(!$validno){
            echo '<font color="red">Molimo unesite ispravan format emaila</font>';
        }
        else{
            $email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
        $emailbool=true;
        }
}
if ($emailbool && $imebool && $passbool) {
$query = "INSERT INTO korisnici (name, pass, email, ime) VALUES ('$name', '$pass', '$email', '$ime')";
$result = @mysql_query($query);
if ($result) {
echo '<p><font color="red">Uspješno ste se registrovali!</font></p>';
} else {
echo '<font color="red"><p>Korisnik nije dodan! Molimo pokušajte kasnije.</p></font>';
}
} else {
echo '<p><font color="red">Molimo unesite informacije</font></p>';
}
}
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    

    

    
<p><b>Ime :</b><br />
<input type="input" name="ime" size="15" maxlength="35" value="<?php if(isset($_POST['ime'])) echo $_POST['ime']; ?>" /></p>

    <p><b>Password  :</b><br />
<input type="input" name="pass" size="25" maxlength="60" value="<?php if(isset($_POST['pass'])) echo $_POST['pass']; ?>" /></p>
    
    <p><b>Email  :</b><br />
<input type="input" name="email" size="25" maxlength="60" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" /></p>

    
<p><input type="submit" name="submit" value="Registruj se" /></p>
<input type="hidden" name="submitted" value="TRUE" /></p>
</form>

<div align="center"><a href="../index.php">Zatvorite ovaj prozor</a></div>