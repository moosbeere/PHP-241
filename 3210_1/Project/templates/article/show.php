<?php require dirname(__DIR__).'/header.php';?>
<div class="card" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getName();?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$article->getAuthorId()->getNickName();?></h6>
    <p class="card-text"><?=$article->getText();?></p>
    <a href="<?=dirname($_SERVER['SCRIPT_NAME']);?>/article/<?=$article->getId();?>/edit" class="btn btn-primary">Article update</a>
    <a href="<?=dirname($_SERVER['SCRIPT_NAME']);?>/article/<?=$article->getId();?>/delete" class="btn btn-warning">Article delete</a>
  </div>
</div>
<?php require dirname(__DIR__).'/footer.php';?>