<?php
 session_start(); //Démarrer une session http // phai xuat hien dau tien
 $_SESSION['login'] = '';//Chaîne vide
 $_SESSION['password'] = '';
 if (isset($_POST['submit'])) {
 // bouton submit pressé, je traite le formulaire
 $login = (isset($_POST['login'])) ? $_POST['login'] : '';
 $pass = (isset($_POST['pass'])) ? $_POST['pass'] : '';
 if (($login == "Matthieu") && ($pass == "Tux")) {
 $_SESSION['login'] = "Matthieu";
 $_SESSION['password'] = "Tux";
 echo '<a href="accueil.php" title="Accueil de la section membre">Accueil</a>';
 } else {
 // une erreur de saisie ...?
 echo '<p style="color:#FF0000; font-weight:bold;">Erreur de connexion.</p>';
 }
 }; // fin if (isset($_POST['submit']))
 if (!isset($_POST['submit'])) {
 // Bouton submit non pressé j'affiche le formulaire
 echo '
<form id="conn" method="post" action="">
<p><label for="login">Login </label><input type="text" id="login" name="login" /></p>
<p><label for="pass">Mot de Passe </label><input type="password" id="pass" name="pass" /></p>
<p><input type="submit" id="submit" name="submit" value="Connexion" /></p>
</form>';
}; // fin if (!isset($_POST['submit'])))