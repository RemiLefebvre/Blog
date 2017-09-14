<?php
  include('connection.php');

  $req = $bdd->prepare('INSERT INTO billets(titre,contenu,date_post) VALUES(:titre,:contenu,NOW())');
  $req->execute(array(
    'titre' => $_POST['titre'],
	'contenu' => $_POST['contenu'],
  ));

  header('Location: index.php');

  // $_POST['titre'], $_POST['contenu'],NOW()
 ?>
