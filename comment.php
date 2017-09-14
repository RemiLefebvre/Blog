<?php include ('header.php') ?>

  <?php
  $nb=htmlspecialchars($_GET['nb']);
  echo '<a href="index.php">Retour</a>';
  if ($_GET['nb']) {
    if (isset($_GET['nb'])) {

  $reponse = $bdd->prepare('SELECT * FROM billets WHERE ID=:ID') or die(print_r($bdd->errorInfo()));
  $reponse->execute(array(
    'ID' => $nb
  ));

  while ($donnees = $reponse->fetch()) {
   ?>
   <div class="container">
     <div class="card mt-5">
       <div class="d-flex">
         <h2><?php echo $donnees['titre'] ?></h2>
         <h5 class="ml-auto "><?php echo $donnees['date_post'] ?></h5>
       </div>
       <?php echo $donnees['contenu'] ?>
       <p><?php echo $donnees['nb_com'] ?> commentaires</p>
     </div>
   <?php
    };
    $reponse->closeCursor(); // Termine le traitement de la requête
   ?>

    <h4 class="mt-5">Commentaires</h4>
    <form  action="post_com.php?nb=<?php echo $nb?>" method="post">
      <input type="text" name="auteur" placeholder="Nom">
      <input type="text" name="com" placeholder="Commentaire..">
      <input type="submit" name="" value="Envoyer">
    </form>

  </div>
  <div class="container mt-5">
  <?php
  $reponse = $bdd->prepare('SELECT * FROM commentaires WHERE ID_billet=:ID  ORDER BY ID DESC') or die(print_r($bdd->errorInfo()));
  $reponse->execute(array(
    'ID' => $nb
  ));

  while ($donnees = $reponse->fetch()) {
 ?>
 <div class="container">
 	<div class="row">
 		 <div class="comment-box">
             <h4 class="title"> <strong><?php echo $donnees['auteur'] ?></strong> <?php echo $donnees['date_com'] ?> </h4>
             <?php echo $donnees['com'] ?>
         </div>
 	</div>
 </div>

 <?php
    };
  ?>
  </div>

<?php
    }
    else{
      echo 'eh didon';
    }
  }
?>

<?php include ('footer.php') ?>
