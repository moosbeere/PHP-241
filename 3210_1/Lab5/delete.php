<?php
    $sql = "SELECT `id`, `firstname`, LEFT(`name`, 1) N, LEFT(`lastname`,1) L FROM `notes` ORDER BY `firstname`";
    $result = mysqli_query($mysqli, $sql);
    if(!mysqli_errno($mysqli)) echo mysqli_error($mysqli);
    while($row = mysqli_fetch_assoc($result)):?>
        <a href="index.php?id=<?=$row['id'];?>"><?=$row['firstname'].' '.$row['N'].'.'.$row['L'].'.<BR>';?></a>
    <?php endwhile;?>
