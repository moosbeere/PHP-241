<?php require(dirname(__DIR__).'/header.php');?>
<div class="card mt-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getTitle();?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$article->getAuthorId()->getNickname();?></h6>
    <p class="card-text"><?=$article->getText();?></p>
    <a href="<?=dirname($_SERVER['SCRIPT_NAME'])?>/article/<?=$article->getId();?>/edit" class="card-link">Article update</a>
    <a href="<?=dirname($_SERVER['SCRIPT_NAME'])?>/article/<?=$article->getId();?>/delete" class="card-link">Article delete</a>
  </div>
</div>
<?php require(dirname(__DIR__).'/footer.html');?>
