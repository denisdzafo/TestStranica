function prikaziSakrij()
{	
	var a=document.getElementById("obrazovanjeMeni");
	var r=document.getElementById("Obrazovanje");
  
	if(a.classList.contains("hidden"))
	{
		a.style.visibility="visible";
		a.className="";
		r.innerHTML="▲ Obrazovanje";
	}
	else{
		a.className="hidden";
	r.innerHTML="▼ Obrazovanje";
	a.style.visibility="hidden";
	}
}

function validacijaKontakt(){
	var ime = document.getElementById('ime');
    var prezime = document.getElementById('prezime');
    if (ime.value == null || ime.value == "") {

        document.getElementById('imeUpozorenje').style.visibility = 'visible';
        document.getElementById('imeTekst').style.visibility = 'visible';
        return false;

    } else {
        document.getElementById('imeUpozorenje').style.visibility = 'hidden';
        document.getElementById('imeTekst').style.visibility = 'hidden';        

    }
    
   
    if (prezime.value == null || prezime.value == "") {
        document.getElementById('prezimeUpozorenje').style.visibility = 'visible';
        document.getElementById('prezimeTekst').style.visibility = 'visible';
        return false;
    }
    else {
        document.getElementById('prezimeUpozorenje').style.visibility = 'hidden';
        document.getElementById('prezimeTekst').style.visibility = 'hidden';
    }
    
    var email = document.getElementById('email');
    var emailvalidacija = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]/i;
    if (!emailvalidacija.test(email.value) || email.value == "") {
        document.getElementById('emailUpozorenje').style.visibility = 'visible';
        document.getElementById('emailTekst').style.visibility = 'visible';
        return false;
    }
    else {
        document.getElementById('emailUpozorenje').style.visibility = 'hidden';
        document.getElementById('emailTekst').style.visibility = 'hidden';
    }
    
    var email2 = document.getElementById('email2');
    if (email2.value != email.value) {
        document.getElementById('email2Upozorenje').style.visibility = 'visible';
        document.getElementById('email2Tekst').style.visibility = 'visible';
        return false;
    }
    else {
        document.getElementById('email2Upozorenje').style.visibility = 'hidden';
        document.getElementById('email2Tekst').style.visibility = 'hidden';
    }
    
    var poruka = document.getElementById('poruka');
    if (poruka.value == "") {
        document.getElementById('porukaUpozorenje').style.visibility = 'visible';
        document.getElementById('porukaTekst').style.visibility = 'visible';
        return false;
    }
    else {
        document.getElementById('porukaUpozorenje').style.visibility = 'hidden';
        document.getElementById('porukaTekst').style.visibility = 'hidden';
    }
    
	var ajax = new XMLHttpRequest();
	var mjesto = document.getElementById('mjesto').value;
	mjesto = encodeURIComponent(mjesto);
	var pbroj = document.getElementById('pbr').value;
	pbroj = encodeURIComponent(pbroj);
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200){
			var odgovor = JSON.parse(ajax.responseText);
			if(odgovor.greska == "Nepostojeće mjesto"){
				
				document.getElementById('mjestoUpozorenje').style.visibility = 'visible';
				document.getElementById('obaveznoM').innerHTML = odgovor.greska;
				document.getElementById('obaveznoM').style.display = "inline";
			}
			else if(odgovor.greska == "Poštanski broj ne odgovara mjestu"){
				
				document.getElementById('mjestoUpozorenje').style.visibility = 'visible';
				document.getElementById('obaveznoM').innerHTML = odgovor.greska;
				document.getElementById('obaveznoM').style.display = "inline";
			}
			else{
				document.getElementById('obaveznoM').style.display="none";
				document.getElementById('mjestoUpozorenje').style.visibility = 'hidden';
			}
			
			if(odgovor.greska == "Nepostojeći poštanski broj"){
				
				document.getElementById('postanskiBrojUpozorenje').style.visibility = 'visible';
				document.getElementById('obaveznoPB').innerHTML = odgovor.greska;
				document.getElementById('obaveznoPB').style.display = "inline";
			}
			else{
				document.getElementById('obaveznoPB').style.display="none";
				document.getElementById('postanskiBrojUpozorenje').style.visibility = 'hidden';
			}
		}
		if (ajax.readyState == 4 && ajax.status == 404) {
			document.getElementById('mjesto').innerHTML = "Greska: nepoznat URL";
		}
	}
	ajax.open("GET", "http://zamger.etf.unsa.ba/wt/postanskiBroj.php?mjesto=" + mjesto + "&postanskiBroj=" + pbroj, true);
	ajax.send();
	
}
