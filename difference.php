<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Difference</title>
</head>
<body>
    <?php
    function difference($num){
        if ($num <= 13){
            return 13 - $num; 
        }
        else{
            return abs(13 - $num)*2;
        }
    }
    $num = 10;
    echo "The absolute diffference between 13 and 
    given number $num is " . difference($num) . "<br>";
    $num = 15;
    echo "The absolute diffference 
    between 13 and given number $num is " . difference($num) . "<br>";
    ?>
</body>