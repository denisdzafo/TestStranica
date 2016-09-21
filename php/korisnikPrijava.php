<?php
header('Content-Type: text/html; charset=utf-8');
$ime=$sifra=$poruka="";
$valid=true;
$korisnik="korisnik";
session_start();
$veza = new PDO("mysql:dbname=korisnici;host=localhost;charset=utf8", "root", "");
$veza->exec("set names utf8");

    if (isset($_SESSION['ime'])){
    $ime = $_SESSION['ime'];
        print "<p> Nije moguće se prijaviti, već ste prijavljeni pod korisničkim imenom:  ".$ime."</p>";
        print "<p><a href='logoutKorisnik.php'>Odjava</a></p>";
    }
    else if (isset($_REQUEST['ime'])) {
    $valid=true;
    $ime = $_REQUEST['ime'];
    $pass = $_REQUEST['pass'];

    $query = $veza->prepare("SELECT name, ime, pass FROM korisnici WHERE ime=? and pass=?");
    $query->execute(array($ime,$pass));
 
$postojiLI=$query->rowCount();

if(empty($postojiLI)){

 $poruka="Prijava nije moguća, molimo vas da pokušate ponovo";
 $valid=false;

}

   foreach($query as $value) {
        $ime=$value['ime'];
        $sifra=$value['pass'];
        $tipkorisnika=$value['name'];
       if($ime==$ime && $sifra==$pass && $tipkorisnika==$korisnik){
            $_SESSION['ime'] = $ime;
            $_SESSION['pass'] = $pass;
            $poruka= "Prijavljeni ste kao korisnik ".$ime;
            print "<p><a href='logoutKorisnik.php'>Odjava</a></p>";
            print "<p><a href='../index.php'>Vrati se na početnu stranu</a></p>";
       }
       else $valid=false;
   }

print "<p>".$poruka."</p>";

 

        }
  if(!$valid) {
           print"<p class=ispis><a href='../index.php'>Povratak</a></p>";
        }


         ?>    



