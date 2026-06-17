<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $my_cars = "Honda";

    echo "I have a {$my_cars} car.";
    ?>
    <br>
    <?php 
    $var1 = 'Bob,';
    echo $var1;

    $var1 = 'John';
    echo $var1;
    ?>
    <br>
    <?php 
    echo "Hello,"."CodeAcademy";   
    ?>
    <br>
    <?php 
    $var = "hello,";
    $var .= "world!";
    
    echo $var;
    ?>
    <br>
    <?php 
    echo "John _ 07"  
    ?>
    <br>
    <?php 
    $original = "I ice Tea";
    $copy = $original; 
    $original = "I love Tea";

    echo $copy; // Output: I ice Tea
    ?>
    <br>
    <?php
    echo "Hello, world!\nThis is a string";
    ?>
    <br>
    <?php
    $var = 5 + 6 / 2;
    echo "the answer is {$var}";
    ?>
    <br>
    <?php
    $my_variable = 'John';

    $my_cool_variable = 22;
    ?>
    <br>
    <?php
    $var1 = 5;
    $var2 =& $var1;
    
    $var2 = 10;
    echo $var1; // Output: 10
    ?>
    <br>
    <?php
    $var = 4;
    echo 2 ** 4;
    ?>
    <br>
    <?php
    $var1 = 6 / 4; // Arithmetic Operators ( + , -, *, /)

    echo $var1;
    ?>
</body>
</html>