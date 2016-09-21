<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
session_destroy();
echo "Odjavili ste se";
?><a href="../index.php"> Vratite se napočetnu stranicu</a>