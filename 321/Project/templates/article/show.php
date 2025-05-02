<?php require(dirname(__DIR__).'/header.php');?>
<div class="card mt-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article['title'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$article['author_id'];?></h6>
    <p class="card-text"><?=$article['text'];?></p>
    <a href="#" class="card-link">Article update</a>
    <a href="#" class="card-link">Article delete</a>
  </div>
</div>
<?php require(dirname(__DIR__).'/footer.html');?>
