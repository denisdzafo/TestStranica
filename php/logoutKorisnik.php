<?php



session_start();
if (isset($_SESSION['ime'])) {
   session_destroy();
 

} 

  $message = "Uspješno ste se odjavili";
echo "<script type='text/javascript'>alert('$message');</script>";
header("Location: ../index.php");
   //echo "<br/><a href='index.html'>login</a>";

?>