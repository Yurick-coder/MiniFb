<?php
?>
<form action='index.php?action=creacompte' method='POST' enctype="multipart/form-data">
<input type="file" id="avatar" name="avatar">
<input type="text" name="login" placeholder="Identifiant"><br/>
<input type="email" name="mail" placeholder="Mail"><br/>
<input type="password" name="passwd" placeholder="Mot de passe"><br/>
<input type="password" name="repasswd" placeholder="Répétez le mot de passe"><br/>
<input type='submit' value='Valider' /><br/>
</form>
