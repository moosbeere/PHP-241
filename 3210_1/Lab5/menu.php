<?php 
    // $mysqli = mysqli_connect('localhost', 'root', '', 'friends');
    // if(!mysqli_connect_errno()) echo mysqli_connect_error();
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
      <td><a href="edit.php?id=<?=$row['id'];?>"><?= $row['firstname'];?></a></td>
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