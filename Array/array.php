<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cars = array('John', 22, 'Castor');
    
    echo count($cars); // Output: 3
    ?>
    <br>
    <?php 
    $apple = array('manggo', 'banana', 'grapes');

    echo $apple[0]; // Output: manggo
    echo $apple[1]; // Output: banana   
    echo $apple[2]; // Output: grapes
    ?>
    <br>
    <?php 
    $cars = array('Toyota', 'Honda', 'Civic');

    $cars[1] = 'Ford'; // Change the value of the first element
    var_dump($cars); // Output: array(3) { [0]=> string(6) "Toyota" [1]=> string(4) "Ford" [2]=> string(5) "Civic" }
    

    ?>
</body>
</html>