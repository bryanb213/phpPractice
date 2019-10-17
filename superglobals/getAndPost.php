<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="name" value="daniel" placeholder="Enter something">
        <br>
        <button type="submit" >Submit for post</button>
    </form>

    <form method="get">
        <input type="hidden" name="name" value="Jonny" placeholder="Enter something">
        <br>
        <button type="submit" >Submit for get</button>
    </form>

    <?php
        echo $_POST['name'];
        echo $_GET['name'];
    ?>
</body>
</html>