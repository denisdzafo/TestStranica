<!DOCTYPE html>
<html lang="ba">
    <head>
    <title> Ministarstvo obrazovanja Čeljigovići</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="stil/stil.css" type="text/css"/>
    </head>
    <SCRIPT src="javaScript/skripta.js"></SCRIPT>
<SCRIPT src="javaScript/skriptaAjax.js"></SCRIPT>
<body class="body">
<?php include 'php/phpheder.php';?>
   <?php
    session_start();
if (isset($_SESSION['ime'])) 
{ $username= $_SESSION['ime'];
  print "<p> Prijavljeni ste pod korisničkim imenom:  ".$username."</p>";
  print "<p><a href='php/logoutKorisnik.php'>Odjava</a></p>";
}

    ?>
    
    <div class="glavnisadrzaj">
        <div class="sadrzaj">
            <?php include 'php/news.php';?>
        </div>    
    </div>
    
     <aside class="vrh-sidebar">
        <article>
            <h2>Srodne Stranice</h2>             
            <ul>
				<li>
					<a href="http://www.mod.gov.ba/">Ministarstvo odbrane</a>
				</li>
				<li>
					<a href="http://www.mkt.gov.ba/">Ministarstvo komunikacija i prometa</a>
				</li>
				<li>
					<a href="http://www.mcp.gov.ba/">Ministarstvo civilnih poslova</a>
				</li>
				<li>
					<a href="http://www.msb.gov.ba/">Ministarstvo sigurnosti</a>
				</li>
				</ul>
        </article>
    </aside>
    <aside class="sredina-sidebar">
        <article>
            <h2>Admin panel</h2>             
            <form action="php/check.php" method="post">
     
    <tr> 
          <td>
            Username(admin):
        </td>
        <td>
            <input type="text" name="ime" /><br>
        </td>
          </tr>
          <tr>
          <td>
            Password(123):
          </td>
            <td>
            <input type="password" name="pass" /><br>
          </td>
          </tr>
          <tr>
              <td></td>

                <td>
                    <input type="submit" value="LOGUJ SE" />
              </td>
              
          </tr>

        </form>
        </article>         
            <a href="php/reset_password.php">Zaboravili ste password</a></li>
    </aside>
    <aside class="dno-sidebar">
        <article>
    <form  action="php/korisnikPrijava.php" method="POST">
            <p>Prijava za korisnika </p>
            <table id="korisniLogin">
            <tr>
                <td><input name="ime"  type="text" ></td>
             </tr>     
            <tr>
                <td><input name="pass" type="password"> </td>
            </tr>
                </table>
        <button name="send" type="submit" >Prijava</button>
     </form>
            <h2>Niste naš korisnik, registruj te se</h2>             
            <a href="php/registracija.php">Registracija</a></li>
        </article>
    </aside>
    
    <footer class="glavnifooter">
        <p>Copyright &copy;<a href="#" title="DenisDzafo"> Denis Džafo </a></p>
    </footer>
    

</body>
    
    
    
    
</html>
