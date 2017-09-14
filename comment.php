<?php include ('header.php') ?>

  <?php

  echo $_GET['nb'];
  $reponse = $bdd->query('SELECT * FROM billets WHERE ID='.$_GET["nb"].'') or die(print_r($bdd->errorInfo()));
  while ($donnees = $reponse->fetch()) {
   ?>
   <div class="container">
     <div class="card mt-5">
       <div class="d-flex">
         <h3><?php echo $donnees['titre'] ?></h3>
         <h5 class="ml-auto "><?php echo $donnees['date_post'] ?></h5>
       </div>
       <?php echo $donnees['contenu'] ?>
     </div>
   <?php
    };
    $reponse->closeCursor(); // Termine le traitement de la requête
   ?>

    <h2 class="mt-5">Commentaires</h2>


  </div>
  <div class="container mt-5">
  <?php
  $reponse = $bdd->query('SELECT * FROM commentaires WHERE ID_billet='. $_GET["nb"] .'') or die(print_r($bdd->errorInfo()));
  while ($donnees = $reponse->fetch()) {
 ?>
    <div class="card">
      <div class="d-flex ">
        <h5><?php echo $donnees['auteur'] ?></h5>
        <p class="ml-auto"><?php echo $donnees['date_com'] ?></p>
      </div>
      <p><?php echo $donnees['com'] ?></p>
    </div>

 <?php
    };
  ?>
  </div>

<?php include ('footer.php') ?>
