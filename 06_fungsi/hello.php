<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Functions</h2>
        <hr>
        <?php
            function sayHallo($name, $umur) {
                return "Hallo saya $name, umur saya $umur tahun";
            }
        ?>
        <p><?= sayHallo("loveiana", 17) ?></p>
        <p><?= sayHallo("juldin", 16) ?></p>
        <p><?= sayHallo("ridwan", 76) ?></p>
    </div>
</body>
</html>