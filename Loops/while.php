<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $i = 1;
        while ($i <= 10) {
            $i++;
        }

        $i = 1;// Initialize the variable $i with a value of 1
        while ($i <= 10):// Start of while loop
            echo $i . "<br>";// Output: 1 2 3 4 5 6 7 8 9 10/
            $i++;// Increment the value of $i by 1
        endwhile;// End of while loop
    ?>
</body>
</html>