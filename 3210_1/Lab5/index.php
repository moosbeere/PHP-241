<?php require('header.php');?>
<?php 
  if(isset($_GET['elem']) && $_GET['elem'] == 'add')
    require('add.php');
  if(isset($_GET['elem']) && $_GET['elem'] == 'delete')
    require('delete.php');
?>
<?php  if(isset($_GET['elem']) && $_GET['elem'] == 'menu'):?>
  <?php 
    $mysqli = mysqli_connect('localhost', 'root', '', 'freinds');
    if(!mysqli_connect_errno($mysqli)) echo mysqli_connect_error();
    $sql = "SELECT * FROM `notes`";
    $res = mysqli_query($mysqli, $sql);
    if(!mysqli_errno($mysqli)) echo mysqli_error($mysqli);
  ?>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Firstname</th>
      <th scope="col">Name</th>
      <th scope="col">Lastname</th>
      <th scope="col">Date</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = mysqli_fetch_assoc($res)):?>
    <tr>
      <th scope="row"><?= $row['id'];?></th>
      <td><?= $row['firstname'];?></td>
      <td><?= $row['name'];?></td>
      <td><?= $row['lastname'];?></td>
      <td><?= $row['date'];?></td>
      <td><?= $row['email'];?></td>
      <td><?= $row['phone'];?></td>
      <td><?= $row['comment'];?></td>
    </tr>
  <?php endwhile;?>  
  </tbody>
</table>
<?php endif; ?>
<?php require('footer.php');?>