
<?php
    session_start();
    require('form.php');
    if(isset($_GET['session'])){
        session_destroy();
        $_SESSION['result'] = null;
    }
    if(isset($_POST['expression']) && !empty($_POST['expression'])){
       eval('$result='.$_POST['expression'].';');
       $key = $_POST['expression'];
        $_SESSION[$key] = $result;
    }
    
    foreach($_SESSION as $key=>$value)
        {
            echo "$key=$value<BR>";
        }

        

    // session_start();
    // if (!isset($_SESSION['counter'])) $_SESSION['counter']=1;
    // else $_SESSION['counter']++;
    // echo 'Вы обновили страницу: '.$_SESSION['counter'];
    // session_destroy();
    // setcookie('test', 'test');
    // echo $_COOKIE['test'];
    // setcookie('test', '', time());
    // echo $_COOKIE['test'];