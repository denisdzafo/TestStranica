<?php
header('Content-Type: text/html; charset=utf-8');
if (isset($_GET['id'])) {
}
 else {

echo 'Niste logovani kao administrator';

exit();

}
?>

<!DOCTYPE html>
<html lang="ba">
    <head>
    <title> Ministarstvo obrazovanja Čeljigovići</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../stil/stil.css" type="text/css"/>
    </head>
<body class="body">
    <header class="glavniheader">
        <img src="../img/logo.png" alt="logo">
        <h2 class="naslov"> Ministarstvo obrazovanja Čeljgovići 
        </h2>
        
        <nav>
            <ul>
            <a href ="logout.php">Odjavi se</a>
            </ul>
         </nav>
     </header>
    <br>
    
     <div class="glavnisadrzaj">
        <div class="sadrzaj">
            <h2>Dobro došao Administratoru! Odaberite šta želite raditi:</h2> 
             <?php include 'news_manage.php';?>
        </div>    
    </div>   
    
    

    
    
<SCRIPT src="javaScript/skripta.js"></SCRIPT>
<SCRIPT src="javaScript/skriptaAjax.js"></SCRIPT>
</body>
    
    
    
</html>

