<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="./contact.php">Contact</a></li>
        <li><a href="./session.php">Home</a></li>
    </ul>
    <h1>index</h1>
    <?php
        echo $_SESSION['username'];
    ?>
</body>
</html>