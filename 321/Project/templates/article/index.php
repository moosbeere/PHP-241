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
      <td><?=$article['created_at'];?></td>
      <td><a href="<?=$_SERVER['REQUEST_URI']?>article/<?=$article['id'];?>"><?=$article['title'];?></a></td>
      <td><?=$article['text'];?></td>
      <td><?=$article['author_id'];?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
