<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title></head>
<body>
<button onclick="history.go(-1);">Back</button>
<br>
<body>
</html>

<?php

function calculator()
{
    $str = $_POST["math"];
    if (preg_match('~^[0-9()+\-*\/]+$~', $str)) {
        $math_string = "print (" . $str . ");";
        $result = eval($math_string);
        echo 'Result is: ' . $result;
    } else {
        echo 'Not a mathematical expression.';
    }
}

calculator();
