
function provjeriPodatkeProizvoda(proizvod) {
     
		var validno = true;

		if(proizvod.naziv.length === 0) {
			document.getElementById('greska_naziv').style.visibility = 'visible';
			document.getElementById('greskaTekst').style.display = "block";
			validno = false;
		}

		if(validno) {
			document.getElementById('greska_naziv').style.visibility = 'hidden';
			document.getElementById('greskaTekst').style.visibility = 'hidden';
		}
		return validno;
}


function unesiProizvod() {

	var forma = document.getElementById('produktiForma');
	var naziv = forma.naziv_in.value;
	var opis = forma.opis_in.value;
	var slika = forma.slika_url_in.value;
    var proizvod = {
		naziv: naziv,
		opis: opis,
		slika: slika,
	};
	if(provjeriPodatkeProizvoda(proizvod) === true) {
		var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function(){
	 		if(ajax.status === 200 & ajax.readyState === 4) {
	   			alert("Uspjesno ste unijeli artikal!");
	   			ispisiProizvode();
	  		}
	 	}
		ajax.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=15609", true);
		ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		ajax.send("&brindexa=15609&proizvod=" + JSON.stringify(proizvod));
	}
}


function obrisiProizvod() {

	var forma = document.getElementById('produktiForma');
	var proizvod = {
		naziv: naziv
	};

	if(provjeriPodatkeProizvoda(proizvod) === true) {
		var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function(){
 			if(ajax.status === 200 & ajax.readyState === 4) {
	   			alert("Uspjesno ste obrisali proizvod!");
	   			ispisiProizvode();
	  		}
	 	}
		
		ajax.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php", true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        proizvod = JSON.stringify(proizvod);
        ajax.send("brindexa=15609&akcija=brisanje&proizvod="+proizvod);
	}
}

function promjeniProizvod() {

	var forma = document.getElementById('produktiForma');
	var naziv = forma.naziv_in.value;
	var opis = forma.opis_in.value;
	var slika = forma.slika_url_in.value;
	var proizvod = {
		naziv: naziv,
		opis: opis,
		slika: slika,
	};

	if(provjeriPodatkeProizvoda(proizvod) === true) {
		var ajax=new XMLHttpRequest();
		ajax.onreadystatechange=function(){
	 		if(ajax.status === 200 & ajax.readyState === 4) {
	   			alert("Uspjesno ste promjenili proizvod!");
	   			ispisiProizvode();
	  		}
	 	}
		
		ajax.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=15609", true);
		ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		proizvod = JSON.stringify(proizvod);
        ajax.send("brindexa=15609&akcija=promjena&proizvod="+proizvod);
	}
	
}

function ispisiProizvode() {

	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(event){
		if(xmlhttp.status === 200 & xmlhttp.readyState === 4) {
			var spisak = JSON.parse(xmlhttp.responseText);
			ispisitabelu(spisak);
			event.preventDefault();
		}
	}
	xmlhttp.open("GET","http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=15609", true);
	xmlhttp.send();
}

function ispisitabelu(spisak) {

    for(i = 0; i < 11; i++) {
		}
	var i = 0;
	var ubaci = "";
	for(var index = spisak.length - 1; index >= 0; index--) {
		if(i === 0) {
			ubaci = ubaci + "<tr>";
		}
			
		ubaci = ubaci + "<td><div class = 'table_product'><a href='#'><img class='produktiSlika' src=" + spisak[index].slika + " onclick = (" + spisak[index].naziv + ")></a><a href='#'><h4>" + spisak[index].naziv + "</h4></a><p class = 'opis'>" + spisak[index].opis + "</p></td>";
		i += 1;
		if(i === 3) {
			i = 0;
			ubaci = ubaci + "<tr>";
		}
	}
		if(i != 0) {
			ubaci = ubaci + "<tr>";
		}
		
		document.getElementById("proizvodiTabela").innerHTML = ubaci;
        
}