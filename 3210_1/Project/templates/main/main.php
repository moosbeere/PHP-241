<?php
    require dirname(__DIR__).'../header.php';
    echo "<h1>Главная старница</h1>";
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($articles as $key=>$value):?>
    <tr>
      <th scope="row">1</th>
      <td><?=$key;?></td>
      <td><?=$value;?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
<?php require dirname(__DIR__).'/footer.php'; ?>