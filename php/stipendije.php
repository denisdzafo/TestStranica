<?php include 'phpheder.php';?>
    
    <div id="proizvodi">
        
            <h3 id="products_h">Unesite studenta koji je dobio stipendiju</h3>
            <form id = "produktiForma">
                    <p>Naziv stipendije </p>       
                    <input id="naziv" type="text" name="naziv_in">
                    <img src="img/upozorenje.jpg" id="greska_naziv" />
                    <p id ="greskaTekst">Mora biti popunjeno!</p>
                    <p>Opis stipendije </p>
                    <input id="opis" type="text" name="opis_in">
                
                     <p>Slika studenta </p> 
                    <input id="slika_url" type="text" name="slika_url_in">
                
                               
                <div id="dugme">
                    <input  type="button" id="unesi"  onclick = "unesiProizvod()" value="Unesi">
                    <input  type="button" id="obrisi" onclick = "obrisiProizvod()" value="Obrisi">
                    <input  type="button" id="promijeni"  onclick = "promjeniProizvod()" value="Promijeni">
                </div>
              <table id = "proizvodiTabela" class="products">
                <tr>
                    <td>
                        <div class="klasaTabela">
                            <a href="#"><img class="slikaTabela" src="img/slikaSadrzaj.png" alt="slikaNeka"></a>
                            <a href="#"><h4>Stipendija</h4></a>
                            <p class = "opis">Na podrucju opštine Niodaklevci...</p>
                            
                        </div>
                    </td>
                </tr>
            </table>
            </form>
        	

    </div>
    <footer class="glavnifooter">
        <p>Copyright &copy;<a href="#" title="DenisDzafo"> Denis Džafo </a></p>
    </footer>
    <SCRIPT src="javaScript/skripta.js"></SCRIPT>
</body>
</html>