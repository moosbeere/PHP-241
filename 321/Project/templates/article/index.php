<?php require(dirname(__DIR__).'/header.php');?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Title</th>
      <th scope="col">Text</th>
      <th scope="col">Author</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($articles as $article):?> 
    <tr>
      <th scope="row">1</th>
      <td><?=$article->getCreatedAt();?></td>
      <td><a href="<?=dirname($_SERVER['REQUEST_URI'])?>/article/<?=$article->getId();?>"><?=$article->getTitle();?></a></td>
      <td><?=$article->getText();?></td>
      <td><?=$article->getAuthorId()->getNickname();?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
