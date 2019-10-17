<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //for cookies

        setcookie("name", "Daniel", time() + 86400);// Will save the name Daniel in cookies with the current time and will delete itself in a day which is the milliseconds
        //setcookie("name", "Daniel", time() - 1); this Destroys cookies now like if a button were to destroy all cookies

        //saving a session called name and setting it equal to 12=
        $_SESSION['name'] = "12";
    ?>
</body>
</html>