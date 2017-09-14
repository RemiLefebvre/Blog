<?php
  include ('header.php');
 ?>

      <div class="container">

        <h3>Ajouter post </h3>
        <div class="card">
          <form class="d-flex" action="post.php" method="post">
            <div class="">
              <input type="text" name="titre" placeholder="Titre">
              <textarea name="contenu" rows="8" cols="80"></textarea>
            </div>
            <input type="submit" value="Poster">
          </form>
        </div>
      </div>

        <div class="container">

          <h1 class="mt-5">SUPER BLOG 2000</h1>
          <?php

          $reponse = $bdd->query('SELECT * FROM billets ORDER BY ID DESC') or die(print_r($bdd->errorInfo()));

          while ($donnees = $reponse->fetch()) {
            ?>
            <div class="card mt-5">
              <div class="d-flex">
                <h3><?php echo $donnees['titre'] ?></h3>
                <h5 class="ml-auto "><?php echo $donnees['date_post'] ?></h5>
              </div>
              <?php echo $donnees['contenu'] ?>
              <?php echo '<br>' ?>
              <?php
                echo '<a href="comment.php?nb=' . $donnees["ID"] . '"> ' . $donnees['nb_com'] . ' commentaires </a>';
                ?>
            </div>
            <?php
          }

          $reponse->closeCursor(); // Termine le traitement de la requête

          ?>
        </div>

<?php include('footer.php') ?>
