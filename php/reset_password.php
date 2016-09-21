<?php
include('mysql_connect3.php');
echo "

<form action='reset_password.php' method='POST'>
Unesi username:<br><input type='text' name='username'><p> 
Unesi email: <br> <input type='text' name='email'>
<p><input type='submit' name='submit' value='Promjeni' /><p>
</form>";
    
    if(isset($_POST['submit'])){
     $username=$_POST['username'];
    $email=$_POST['email'];
    $query=mysql_query("SELECT * FROM korisnici WHERE ime='$username'");
        $numrow =mysql_num_rows($query);
    if($numrow!=0)
    {
        while($row=mysql_fetch_assoc($query))
        {
            $db_email=$row['email'];
        }
        if($email==$db_email)
        {
            $code=rand(10000, 1000000);
            $to=$db_email;
            $subject="Passord Reset";
            $body =" Ovo je automatski email, ne odgovarajre na ovaj mail";
            
            mysql_query("UPDATE korisnici SET pass=$code WHERE ime='$username'");
            mail($to, $subject, $body);
        echo "Provjerite vaš email";
            
        }
        else
        {
            echo "Nije tacan email";
        }
        
        
    }
    else 
    {
        echo "Ne postoji to username";
    }
    }
?>

<div align="center"><a href="../index.php">Zatvorite ovaj prozor</a></div>