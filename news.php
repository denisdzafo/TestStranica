<html>

	<head>

		<script type="text/javascript">

			function openComments(url)
			{
				comments = window.open(url, "Comment", "menubar=0,resizable=0,width=380,height=480")
				comments.focus()
			}

		</script>

	</head>

	<body>

		<?php

			include ('mysql_connect.php');
			$result = mysql_query("SELECT id, naslov, autor, slika, tekst, datum, detaljnije FROM news_posts ORDER BY datum DESC");
			if ($result) {
				while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				    $detaljnije=$row['detaljnije'];
				    $tekst=$row['tekst'];
				    $url = 'comments.php?id='.$row['id'];
				    $imaDetaljno = false;
				    $linkDetaljno = '<a class="read-more" href="?klikDetaljno='.$row['id'].'">Detaljnije...</a>';
				    if(strlen($detaljnije)!=0){
							$imaDetaljno = true;
						}
				    if(!$imaDetaljno) {
				       $linkDetaljno = "";
				    }
				    if(isset($_GET['klikDetaljno'])){
				        break;
				     }
						 $pomocnaSlika="<img src='".htmlentities($row['slika'],ENT_QUOTES)."' alt='Slika' style='width:500px; height500px;'>";

						 echo '<h1>'.$row['naslov'].'</h1>';
						 echo '<p><i>Objavio: '.$row['autor'].'</p></i>';
						 print $pomocnaSlika;
						 echo '<p><i>Objavljeno: '.$row['datum'].'</p></i>';
						 echo '<p>'.$row['tekst'].'</p>';
						 echo "<p>$linkDetaljno </p>";
				     if(isset($_GET['klikDetaljno'])){
				        break;
				     }
						 echo '<a href="javascript:openComments(\''.$url.'\')">Dodaj novi komentar ili pogledaj ostale komentare</a></p>';
						 echo "<hr>";
				}
			}
			if(isset($_GET['klikDetaljno'])){
				$rezultat = mysql_query("SELECT * FROM news_posts WHERE id=".$_GET['klikDetaljno']);
				if($rezultat){
				    while($row = mysql_fetch_array($rezultat, MYSQL_ASSOC))
				    {
								$pomocnaSlika="<img src='".htmlentities($row['slika'],ENT_QUOTES)."' alt='Slika' style='width:500px; height500px;'>";
								echo '<h1>'.$row['naslov'].'</h1>';
								echo '<p><i>Objavio: '.$row['autor'].'</p></i>';
	 						 	print $pomocnaSlika;

	 						 	echo '<p><i>Objavljeno: '.$row['datum'].'</p></i>';
	 						 	echo '<p>'.$row['tekst'].'</p>';
								echo '<p>'.$row['detaljnije'].'</p>';
								echo '<hr>';
				    }
				}
			}

		?>
	</body>
</html>
