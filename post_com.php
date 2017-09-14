<?php
include('connection.php');

$req = $bdd->prepare('INSERT INTO commentaires(auteur,com,ID_billet) VALUES(:auteur,:com,:ID_billet)');
$req->execute(array(
  'auteur' => $_POST['auteur'],
  'com' => $_POST['com'],
  'ID_billet' => $_GET['nb']

));

$req = $bdd->prepare('UPDATE billets SET nb_com = nb_com+1 WHERE ID = :ID');
$req->execute(array(
  'ID' => $_GET['nb']

));

header('Location: comment.php?nb='.$_GET['nb']);

?>
