<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "For Loops <br>";

    /* example one */
    for ($i = 1; $i <= 10; $i++) { //
        echo $i; //
    }

    /* example two */
    for ($i = 1;; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
    }

    /* example three */
    $i = 1;
    for (;;) {
        if ($i > 10) {
            break;
        }
        echo $i;
        $i++;
    }

    /* example four */
    for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
    ?>

    <?php 
    
        $people = array (
            array('name' => 'Kalle', 'salt' => 856412),
            array('name' => 'Pierre', 'salt' => 215863)
        );

            for($i = 0, $size = count($people); $i < $size; ++$i) {
               $people[$i]['salt'] = mt_rand(000000, 999999); 
            }
    ?>
</body>

</html>