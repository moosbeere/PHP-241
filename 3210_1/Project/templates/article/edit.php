<?php require dirname(__DIR__).'/header.php';?>
<form action="<?=dirname($_SERVER['SCRIPT_NAME']);?>/article/<?=$article->getId();?>/update" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Article title</label>
    <input type="text" class="form-control" id="name" name="name" value="<?=$article->getName();?>">
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <input type="text" class="form-control" id="text" name="text" value="<?=$article->getText();?>">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php require dirname(__DIR__).'/footer.php';?>
