<?php
/**
 * Created by PhpStorm.
 * User: flore
 * Date: 30/01/2019
 * Time: 10:13
 */
include 'classes/mail.php';
?>
<!Doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>E-mail</title>
</head>
<body>
<header>
</header>
<div>
    <form action="" method="post">
        <label for="destinataire">Destinataire</label>
        <input id="destinataire" name="destinataire" type="text">
        <label for="objet">Objet</label>
        <input id="objet" name="objet" type="text">
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>
        <input id="envoyer" type="submit">
    </form>
    <div><?php $test = new mail(); $test->envoyer(); ?></div>
</div>
</body>
</html>
