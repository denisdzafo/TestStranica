<!DOCTYPE html>
<html lang="ba">
    <head>
    <title> Ministarstvo obrazovanja Čeljigovići</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="stil/stil.css" type="text/css"/>
    </head>
<body class="body">
    <header class="glavniheader">
        <img src="img/logo.png" alt="logo">
        <h2 class="naslov"> Ministarstvo obrazovanja Čeljigovići 
        </h2>
        <nav>
            <ul>
            <li><a href="#" onclick="ucitaj('index.php')">Naslovna</a></li>
            <li><a href="#" onclick="ucitaj('php/ministarstvo.php')">Ministarstvo</a></li>
            <li><a href="#" onclick="ucitaj('php/ustanove.php')">Ustanove</a></li>
            <li><a href="#" onclick="ucitaj('php/kontakt.php')">Kontakt</a></li>
             <li>
					<a href="#" id="Obrazovanje" onclick="prikaziSakrij()"  >▼ Obrazovanje</a>
					<div id="obrazovanjeMeni" class="hidden" >
							<a href="#" onclick="ucitaj('php/stipendije.php')">Stipendije</a>
							 
					</div>
				</li>
            </ul>
         </nav>
     </header>