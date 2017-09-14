<?php
  include('connection.php');

  $req = $bdd->prepare('INSERT INTO billets(titre,contenu,nb_com) VALUES(:titre,:contenu,:nb_com)');
  $req->execute(array(
    'titre' => $_POST['titre'],
	'contenu' => $_POST['contenu'],
  'nb_com'=> 0
  ));

  header('Location: index.php');

 ?>
