<div class="col-md-4 my-2">
    <div class="card">
        <img src="uploads/articles/<?php echo htmlentities($article["image"])?>" class="card-img-top" alt="<?= htmlentities($article["title"])?>">
        <div class="card-body">
          <h5 class="card-title"><?=htmlentities($article["title"])?></h5>
          <!-- On aurait pû rendre le texte de cartes dynamique comme ci-dessous ? -->
          <!-- <p class="card-text"><//?=htmlentities($article["content"])?></p> -->
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="actualite.php?id=<?=$key?>" class="btn btn-primary">Voir toutes les actus</a>
        </div>
    </div>
</div>