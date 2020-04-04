<?php
/*$nom = null;
if (!empty($_GET['action']) && $_GET['action']==='deconncter'){
    unset($_COOKIE['utilisateur']);
    setcookie('utilisateur', "", time() - 10);
}
if (!empty($_COOKIE['utilisateur'])) {
    $nom = $_COOKIE['utilisateur'];
}
if (!empty($_POST['name'])){ // si le poste n'est pas vide dans ce cas là , on récupère le nom.
    setcookie('utilisateur',$_POST['name']);

}
require_once 'header.php';
?>
<?php if ($nom): ?>
<h1>Bonjour <?= htmlentities($nom ) ?></h1>
<a href="profil.php?action=deconnecter">Se déconnecter</a>
<?php else: ?>
<form action="" methode="post">
<div class="form-group">
<input class="form-control" name="nom" placeholder="Entrer votre nom">
</div>
<button class="btn btn-primary">Seconnecter</button>
<?php endif; ?>
</form>