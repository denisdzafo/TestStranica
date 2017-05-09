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

      <?php include('phpheder.php');?>

          <div class="sesija">
            <?php
             session_start();
               if (isset($_SESSION['ime']))
               {
                 $username= $_SESSION['ime'];
                 echo "<p> Prijavljeni ste pod korisničkim imenom:  ".$username." <a href='logoutKorisnik.php'>Odjava</a></p> <hr>";
               }
             ?>
          </div>

          <div class="glavnisadrzaj">


              <div class="sadrzaj">
                  <?php include 'news.php';?>
              </div>
          </div>

           <aside class="vrh-sidebar">
              <article>
                  <h2>Kod cijele stranice pronađite na sljedećem linku</h2>
                  <a href="https://github.com/denisdzafo/TestStranica">Github</a>
              </article>
          </aside>
          <aside class="sredina-sidebar">

                  <h2>Admin panel</h2>
                  <form action="check.php" method="post">
                    <tr>
                      <td>Username(admin):</td>
                      <td><input type="text" name="ime" /><br> </td>
                    </tr>
                    <tr>
                      <td>Password(123):</td>
                      <td><input type="password" name="pass" /><br></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="LOGUJ SE" /></td>
                    </tr>
                  </form>


              </aside>
          <aside class="dno-sidebar">

              <form  action="korisnikPrijava.php" method="POST">
                      <p>Prijava za korisnika </p>

                        <tr>
                            <td>Username(test)</td>
                            <td><input name="ime"  type="text" ></td>
                         </tr>
                        <tr>
                            <td>Password(test)</td>
                            <td><input name="pass" type="password"> </td>
                        </tr>

                      <button name="send" type="submit" >Prijava</button>
               </form>
               <h2>Niste naš korisnik, registruj te se</h2>
               <a href="registracija.php">Registracija</a></li>
          </aside>

          <footer class="glavnifooter">
              <p>Copyright &copy;<a href="#" title="DenisDzafo"> Denis Džafo </a></p>
          </footer>


    </body>




</html>
