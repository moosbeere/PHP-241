<?php require('header.php');?>
<?php 
  $mysqli = mysqli_connect('localhost', 'root', '', 'friends');
  if(!mysqli_connect_errno()) echo mysqli_connect_error();

  //insert
  if(!empty($_POST) && empty($_GET['id'])){
    $sql = 'INSERT INTO `notes`
          (`firstname`, `name`, `lastname`, `date`, `email`, `phone`, `comment`) 
          VALUES (
          \''.htmlspecialchars($_POST['firstname']).'\',
          \''.htmlspecialchars($_POST['name']).'\',
          \''.htmlspecialchars($_POST['lastname']).'\',
          \''.$_POST['date'].'\',
          \''.$_POST['email'].'\',
          \''.$_POST['phone'].'\',
          \''.htmlspecialchars($_POST['comment']).'\'
          )';
    mysqli_query($mysqli, $sql);
    if (!mysqli_errno($mysqli)) echo mysqli_error($mysqli);
  }

  //update
  if (!empty($_POST) && !empty($_GET['id'])){
    $sql = "UPDATE `notes` SET 
          `firstname`='".htmlspecialchars($_POST['firstname'])."',
          `name`='".htmlspecialchars($_POST['name'])."',
          `lastname`='".htmlspecialchars($_POST['lastname'])."',
          `date`='".$_POST['date']."',
          `email`='".$_POST['email']."',
          `phone`='".$_POST['phone']."',
          `comment`='".htmlspecialchars($_POST['comment'])."' WHERE `id`=".$_GET['id'];
    mysqli_query($mysqli, $sql);
    if (!mysqli_errno($mysqli)) echo mysqli_error($mysqli);
  }

  //delete 
  if(isset($_GET['id']) && empty($_POST)){
    $sql = "DELETE FROM `notes` WHERE `id`=".$_GET['id'];
    mysqli_query($mysqli, $sql);
    if (!mysqli_errno($mysqli)) echo mysqli_error($mysqli);
  }

  if(!isset($_GET['elem'])) $_GET['elem'] = 'menu';
  if ($_GET['elem'] == 'menu' || $_GET['elem'] == 'add' || $_GET['elem'] == 'delete') require( $_GET['elem'].'.php');

  mysqli_close($mysqli);
  // if(isset($_GET['elem']) && $_GET['elem'] == 'add')
  //   require('add.php');
  // if(isset($_GET['elem']) && $_GET['elem'] == 'delete')
  //   require('delete.php');
?>

<?php require('footer.php');?>