<?php
    echo 'Страница для просмотра содержимого get массива<BR>';

    // var_dump($_GET);
    if (!empty($_GET) && isset($_GET['name'])) echo $_GET['name'].'<BR>';
    if (!empty($_POST) && isset($_POST['name'])) echo $_POST['name'];
    if (!empty($_POST) && isset($_POST['age'])) echo $_POST['age'].'<BR>';

    if (!empty($_POST)){
        if(isset($_POST['name'])) echo $_POST['name'];
        if(isset($_POST['age'])) echo $_POST['age'].'<BR>';
    }
?>

    <form action="index.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="age">Age</label>
        <input type="text" name="age" id="age">
        <button type="submit">Send</button>
    </form>
