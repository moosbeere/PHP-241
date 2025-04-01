<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="eval.php" method="get">
            <label for="firstname">Enter your Firstname</label>
            <input type="text" name="firstname" id="firstname">
            <label for="oklad">Enter your oklad</label>
            <input type="text" name="oklad" id="oklad">
            <button type="submit">Enter</button>
        </form>

        <form action="eval.php" method="post">
            <label for="vek">Enter vek</label>
            <input type="text" name="vek" id="vek">
            <button type="submit">Enter</button>
        </form>
    </main>
</body>
</html>