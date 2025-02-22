<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
</head>
<body>
    <?php
            if (isset($_GET['name']) && isset($_GET['age'])){
                $name = $_GET['name'];
                $age = $_GET['age'];
            }else{
                $name = NULL;
                $age = NULL;
            }

            if(!empty($_POST)){
                echo 'Hello, I`m '.$_POST['name'].', age - '.$_POST['age'];
                print_r($_COOKIE);
            }
         ?>
    <main>
        <a href="index.php?name=Segey&age=22">Link</a>

        <div class="container">
            <form action="index.php" method=POST>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$name;?>" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$age;?>" name="age">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        
        <!-- $x = 9; -->

    </main>
</body>
</html>