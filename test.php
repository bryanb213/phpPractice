<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <title>Doin PHP!!!</title>
</head>
<body>
    <?php
        //BASIC MATH
        //print 6 + 9; = 15

        //CONCATINATION
        //$name = 'bryan';
        //echo $name.  ' is doin php!!';

        //GETTTING FORM INPUT from url
        //$name = $_GET['name'];
        //echo $name. ' is doing php and got the variable from the url';

        //FUNCTIONSFOR STRINGS
        //echo strlen('hi bryan'); //.length
        //echo str_word_count('hi bryan'); // counts words
        //echo str_replace('hi','yoooo','hi bryan');// replace hi with yooo

        //STRINGS
        //$name = 'php is fun';

        //INT
        //$age =22;

        //BOOL
        //$rue = true;

        //ARRAY
        //$name = array(1,2,3,4,5);
        //echo $name['0'];

        //ARITHMETIC OPERATORS
        // -, +, /, *, %
        //echo 2**5; 2 TO THE POWER OF 5

        //SWITCH
        // $age = 'number'; or number to fit number
        // switch($age) {
        //     case 1:
        //         echo 'the answer is 33';
        //     break;
        //     case 2;
        //         echo 'the answer is 33';
        //     break;
        //     case 'number':
        //         echo 'the number case in this case';
        //         break;
        //     default:
        //         echo 'yoooo';
        //     break;
        // }

        //CALCULATOR




    ?>
    <!-- <form method="get">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form> -->

    //CALC
    <form>
            <input type="text" name="num1" placeholder="Enter number">
            <input type="text" name="num2" placeholder="Enter 2nd number">
            <select name="operator">
                <option value="None">None</option>
                <option value="Add">Add</option>
                <option value="subtract">subtract</option>
                <option value="multiply">multiply</option>
                <option value="divide">divide</option>
            </select>
            <br>
            <button name="submit" value="submit" type="submit">Calculate</button>
    </form>
    <p>the answer is:</p>
    <?php
    if(isset($_GET['submit']))//isset is If we actually hit the button and GET Gets parameters from URL
    {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $op = $_GET['operator'];
        $result;

        switch($op)
        {
            case 'None':
                echo 'enter operator';
            break;
            case 'Add':
                echo $num1 + $num2;
            break;
            case 'subtract':
                echo $num1 - $num2;
            break;
            case 'multiply':
                echo $num1 * $num2;
            break;
            case 'divide':
                echo $num1 / $num2;
            break;
        }
    }
    ?>
</body>
</html>