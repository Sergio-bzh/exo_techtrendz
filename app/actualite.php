<?php 

require_once __DIR__ . "/lib/article.php";
$id = $_GET["id"];
$article = $articles[$id];


require_once __DIR__ . "/lib/menu.php";

$mainMenu["actualite.php"] = ["head_title" => htmlentities($article["title"]), "meta_description" => htmlentities(substr($article["content"], 0, 155)), "exclude" => true];


require_once __DIR__ . "/templates/header.php";
//var_dump($articles[2]["title"]);
?> 

  
<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="./uploads/articles/<?php echo htmlentities($article["image"]);?>" class="d-block mx-lg-auto img-fluid" alt="<?= htmlentities($article["title"])?>" width="700" height="500" loading="lazy">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?php echo htmlentities($article["title"]);?></h1>
    <p class="lead"><?php echo htmlentities($article["content"]);?></p>
  </div>
</div>





<?= require_once __DIR__. "/templates/footer.php";?> 