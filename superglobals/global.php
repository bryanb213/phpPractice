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
        $x = 5;
        function something() {
            $y = 10;
            echo $GLOBALS['x']; //able to use globally
        }
        something();
    ?>
</body>
</html>