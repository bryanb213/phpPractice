<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Days</title>
    <style>
        p{
            text-align: center;
            font-size: 100px;
        }
        .today{
            color: blue;
        }
    </style>
</head>
<body>
    <?php
        $dayOfWeek = Date("w");
        //echo $dayOfWeek;
        switch($dayOfWeek) {
            case 1:
                echo "<p>It's Monday boo!</p>";
            break;
            case 2:
                echo "<p>It's Tuesday!</p>";
            break;
            case 3:
                echo "<p>It's Wednesday!</p>";
            break;
            case 4:
                echo "<p class=\"today\">It's Thursday!</p>";
            break;
            case 5:
                echo "<p>It's Friday yay!</p>";
            break;
            case 6:
                echo "<p>It's Saturday!</p>";
            break;
            case 7:
                echo "<p>It's Sunday</p>";
            break;
        }
    ?>
</body>
</html>