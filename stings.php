<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New String from Last 3 Characters</title>
</head>
<body>
    <?php
    function strback($str){
       if (strlen($str) < 3){
        return false;
        }
        else{
        $str_length = strlen($str);
        $back = substr($str, $str_length-3,3);
        return $back.$str.$back;
        }
    }
    echo("The given string is 'hello' and the
     output is ".strback("hello"));
    echo"<br>";
    echo("The given string is 'welcome'
     and the output is ".strback("welcome"));
    ?>
</body>
</html>