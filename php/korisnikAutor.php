<div ng-app>
    
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" />



<p>Email : <input ng-model type="text" name="email" length="25" maxlength="50" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" /></p>

<p>Adresa : <input ng-model type="text" name="adresa" length="25" maxlength="50" value="<?php if(isset($_POST['adresa'])) echo $_POST['adresa'];?>" /></p>

<p>Komentar : <textarea ng-model columns="6" rows="6" name="komentar"><?php if(isset($_POST['komentar'])) echo $_POST['komentar'];?></textarea></p>

<p><div align="center"><input type="submit" name="submit" value="Ostavite komentar"/></div></p>

<input type="hidden" name="submitted" value="TRUE" />

</form>
</div>
