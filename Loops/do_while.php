<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $i = 0; // Initialize the variable $i with a value of 0 
        do {
            echo $i; // output the value of $i
            $i++; // increment $i by 1

        } while ($i > 0); // condition to continue the loop
    ?>

    <?php 
    $i = 3;
    $factor = 2;
    $minimum_limit = 10;
        do {
            if ($i < 5) {
                echo "i is not big enough";
                break; // exit the loop if $i is less than 5
            }

            $i *= $factor; // multiply $i by $factor
                if ($i < $minimum_limit) {
                    echo "i is not big enough";
                    break;
                }
                echo "i is ok";
        } while (0);
    ?>
</body>
</html>