<?php
     $cssFile = "stil/stil.css";
     echo "<link rel='stylesheet' href='" . $cssFile . "'>";
   ?>
<?php
    header('Content-Type: text/html; charset=utf-8');

    $ime = "";
    $prezime = "";
    $email = "";
    $email2 = "";
    $zanimanje = "";
    $mjesto = "";
    $pbr = "";
	$poruka = "";
    $displayCheck = 'none';
    $valid = true;
    $slika1=$slika2=$slika3=$slika4=$slika5="";
    $tekst1=$tekst2=$tekst3=$tekst4=$tekst5="";
if(isset($_POST["send"]))
    {   
        $ime = htmlspecialchars($_REQUEST['ime'], ENT_QUOTES, 'UTF-8');
        $prezime = htmlspecialchars($_REQUEST['prezime'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_REQUEST['email'], ENT_QUOTES, 'UTF-8');
        $email2 = htmlspecialchars($_REQUEST['email2'], ENT_QUOTES, 'UTF-8');
        $zanimanje = htmlspecialchars($_REQUEST['zanimanje'], ENT_QUOTES, 'UTF-8');
        $mjesto = htmlspecialchars($_REQUEST['mjesto'], ENT_QUOTES, 'UTF-8');
        $pbr = htmlspecialchars($_REQUEST['pbr'], ENT_QUOTES, 'UTF-8');
        $poruka = htmlspecialchars($_REQUEST['poruka'], ENT_QUOTES, 'UTF-8');
        $displayCheck = 'none';
        $string_exp = "/^[A-Za-z .'-]+$/";
         $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($string_exp,$ime)) {
    $slika1 = '<img src="../img/upozorenje.jpg" class="error1" style="display: inline;">';
    $tekst1 .= 'Ime koje ste unjeli nije validno.<br />';
    $valid = false;
  }
  
  if(!preg_match($string_exp,$prezime)) {
    $slika2 = '<img src="../img/upozorenje.jpg" class="error1" style="display: inline;">';
    $tekst2 .= 'Prezime koje ste unjeli nije validno.<br />';
    $valid = false;

  }

 
  if(!preg_match($email_exp,$email)) {
    $slika3 = '<img src="../img/upozorenje.jpg" class="error1" style="display: inline;">';
    $tekst3 .= 'Email koji ste unjeli nije validan.<br />';
    $valid = false;
  }

        
  if(strcmp($email, $email2)){
    $slika4 = '<img src="../img/upozorenje.jpg" class="error1" style="display: inline;">';
    $tekst4 .= 'Email koji ste unjeli nije isti.<br />';
    $valid = false;
  }  
			
  if(strlen($poruka) < 2) {
    $slika5 = '<img src="../img/upozorenje.jpg" class="error1" style="display: inline;">';
    $tekst5 .= 'Poruka koju ste unjeli nije validna.<br />';
    $valid = false;
  }
 
		if($valid)
			{
				$displayCheck = 'block';
				$header = "Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke";
			}	
}

if(isset($_POST["siguran"]))
{
			$header = "Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke";
            $to = "ddzafo1@etf.unsa.ba";
            $subject = "Poruka poslana sa kontakt forme";
			$txt = $ime = htmlspecialchars($_REQUEST['imeH'], ENT_QUOTES, 'UTF-8');
            $txt = $prezime = htmlspecialchars($_REQUEST['prezimeH'], ENT_QUOTES, 'UTF-8');
			$txt = $email = htmlspecialchars($_REQUEST['emailH'], ENT_QUOTES, 'UTF-8');
            $txt = $zanimanje = htmlspecialchars($_REQUEST['zanimanjeH'], ENT_QUOTES, 'UTF-8');
			$txt = $mjesto = htmlspecialchars($_REQUEST['mjestoH'], ENT_QUOTES, 'UTF-8');
            $txt = $pbr = htmlspecialchars($_REQUEST['pbrH'], ENT_QUOTES, 'UTF-8');
			$txt = $poruka = htmlspecialchars($_REQUEST['porukaH'], ENT_QUOTES, 'UTF-8');
            $displayCheck = $_POST["displayCheckH"];
            $headers = "From: webmaster@example.com" . "\r\n" .
                        'Reply-To: '.$_POST["emailH"] . "'" . "\r\n" .
                        "CC: vljubovic@etf.unsa.ba";

                    mail($to,$subject,$txt,$headers);
			echo '<script>alert("Zahvaljujemo se što ste nas kontaktirali")</script>';
}

        
?>

<div id="provjera" style="display: <?php echo $displayCheck; ?> ">
					<form method="post">
						<input type="hidden" name="imeH" value="<?php echo $ime; ?>">
                        <input type="hidden" name="prezimeH" value="<?php echo $prezime; ?>">
						<input type="hidden" name="emailH" value="<?php echo $email; ?>">
                        <input type="hidden" name="zanimanjeH"value="<?php echo $zanimanje?>">
						<input type="hidden" name="mjestoH" value="<?php echo $mjesto; ?>">
                        
                        <input type="hidden" name="pbrH" value="<?php echo $pbr; ?>">
						<input type="hidden" name="porukaH" value="<?php echo $poruka; ?>">
                        <input type="hidden" name="displayCheckH" value="<?php echo $displayCheck; ?>">
						<h1>Da li ste ispravno unjeli podatke?</h1>
						<p>
						<?php 
							echo "Ime: ".$ime."<br>";
                            echo "Prezime: ".$prezime."<br>";
							echo "Email: ".$email."<br>";
                            echo "Zanimanje ".$zanimanje."<br>";
							echo "Mjesto: ".$mjesto."<br>";
                            echo "Postanski broj: ".$pbr."<br>";
							echo "Poruka: ".$poruka."<br>";
						?>
						</p>
						<h4>Da li ste sigurni da želite poslati ove podatke?</h4>
						<button name="siguran" type="submit" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">Siguran&nbsp;sam</button>
					</form>
				</div>

<div class="kontaktforma">
        <p>Obavezna polja *</p>
                   <div id="forma">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<p>Ime(*):</p>
                        <input type="text" name="ime" value="<?php echo $ime; ?>">
                        <?php echo $slika1; ?>
                        <?php echo $tekst1; ?>
                       
            <p>Prezime(*):</p>
                        <input type="text" name="prezime" value="<?php echo $prezime; ?>">
                        <?php echo $slika2; ?>
                        <?php echo $tekst2; ?>
                        
            <p>E-mail(*):</p>
                
                        <input type="text"  name="email" value="<?php echo $email; ?>">
                        <?php echo $slika3; ?>
                        <?php echo $tekst3; ?>
                        
                       
            <p>Potvrdite e-mail(*):</p>
                        <input type="text" name="email2" value="<?php echo $email2; ?>">
                        <?php echo $slika4; ?>
                        <?php echo $tekst4; ?>
                    
                            
            <p>Zanimanje: </p>
                        <input type="text" name="zanimanje" value="<?php echo $zanimanje; ?>">
                        
                
			
            <p>Mjesto:</p>
				        <input type="text" name="mjesto" id="mjesto" value="<?php echo $mjesto; ?>">
                
			
		
                

                <p>Poštanski broj:</p>
                        <input type="text" name="pbr" id="pbr" value="<?php echo $pbr; ?>">
                        
			
			 <br>
			 <p>Poruka(*):</p>
                        <textarea rows="4" cols="50" name="poruka"><?php echo $ime; ?></textarea>
                        <?php echo $slika5; ?>
                        <?php echo $tekst5; ?>
                        <br/>
                
			<div id="dugme">
				<button name="send" type="submit">Pošalji</button>
				<button name="reset" type="submit">Resetuj</button>
			</div>
			</form>
		</div>            
    </div>