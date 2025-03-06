<?php
    require dirname(__DIR__).'../header.php';
    // echo "<h1>Главная старница</h1>";
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Text</th>
      <th scope="col">Author</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($articles as $key=>$value):?>
    <tr>
      <th scope="row"><?=$value['id'];?></th>
      <td><a href="<?=dirname($_SERVER['SCRIPT_NAME']).'/article/'.$value['id'];?>"><?=$value['name'];?></a></td>
      <td><?=$value['text'];?></td>
      <td><?=$value['author_id'];?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<?php require dirname(__DIR__).'/footer.php'; ?>