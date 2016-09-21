function ucitaj(stranica) {
    
	 var requestObject = new XMLHttpRequest();
        requestObject.onreadystatechange = function()
        {
            if (requestObject.readyState === 4 && requestObject.status === 200)
            {
                document.open();
                document.write(requestObject.responseText);
                document.close();
            }
            if (requestObject.readyState == 4 && requestObject.status == 404)
            {
                alert('error');
				return;
            }
        };
        requestObject.open("GET", stranica, true);
        requestObject.send();
    }