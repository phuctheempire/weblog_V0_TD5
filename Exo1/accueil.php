<?php
session_start();
if ((!isset($_SESSION['login'])) || (empty($_SESSION['login']))) {
 // la variable 'login' de session est non déclaré ou vide
 echo ' <p>Petit curieux... <a href="index.php" title="Connexion">Connexion d\'abord !</a></p>';
 exit();
}
print '<div style="background-color:green;color:#FFE930;"> Bonjour Monsieur ' .$_SESSION['login'].'</div>';
print '<hr/> Bienvenue sur notre site p\'tit chef résérvé aux membres!';
//suite du code : contenu réel de la page.
print '<p><a href="index.php?action=logout" title="Déconnexion">Se déconnecter</a></p>'
?>

