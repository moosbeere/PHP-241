<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="https://httpbin.org/post" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="name">email</label>
        <input type="email" name="email" id="email">
        <button type="submit">Enter</button>
        <a href="next.php">next page</a>
    </form>
</body>
</html>