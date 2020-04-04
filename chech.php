<?php
$age = null;
if (!empty($_COOKIE['birthday'])) {
    //si le get n'est pas vide , je la sauvegarde dans une varibale.
    $birthday = (int)$_COOKIE['birthday'];
    $age = (int)date('y')-$birthday;
}
if (!empty($_POST['birthday'])) {
    // si elle n'est pas vide , je la sauvegarde dans une session.
   setcookie('birthday', $_POST['birthday']);
    // attention tout c'est qui est reçu en post est en chaine de caractère.
    $_COOKIE['birthay'] = $_POST['birthday'];
}

 require_once 'header.php';?>
<?php if($age >= 18): ?>
    <h1>Du contenu réservé aux adultes</h1>
    <?php elseif ($age !== null): ?>
    <div class="alert alert-danger">Vous n'avez pas l'age requis pour voir le contenu</div>
    <?php else: ?>
<form action="" methode="post">
<div class="form-group">
<label for="birthday">Section réservé pour les adultes, Entrer votre date de naissance:</label>
    <select name="birthday" id="birthday" class="form-control">
    <?php for($i = 2010; $i > 1919; $i--):?>
        <option value="<?= $i ?>"><?= $i ?></opion>
    <?php endfor ?>
    
    </select>
    </div>
    <button type="submit">Envoyer</button>

    </form>
    <?php endif; ?>

   - Demander  à l'utilisateur sa date de naissance(select 2010-1919)
    - Persister la date de naissance dans un cookie
    - Si l'utulisateur a l'age réquis, on lui affiche le contenu
    - Sinon on affiche un message d'erreur