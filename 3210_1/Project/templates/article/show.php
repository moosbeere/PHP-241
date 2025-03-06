<?php require dirname(__DIR__).'/header.php';?>
<div class="card" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title"><?=$article['name'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$article['author_id'];?></h6>
    <p class="card-text"><?=$article['text'];?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<?php require dirname(__DIR__).'/footer.php';?>