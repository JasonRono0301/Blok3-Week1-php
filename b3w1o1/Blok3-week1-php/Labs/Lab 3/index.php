<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3</title>
</head>
<body>
    <?php
    //Lab 3a Random math rekenmachine.
    
    $getal1 = (mt_rand(1,10));
    $getal2 = (mt_rand(1,10));
    $plus = $getal1 + $getal2;
    $min = $getal1 - $getal2;
    $delen = $getal1 / $getal2;
    $keer = $getal1 * $getal2;

    echo $plus;
    echo $min;
    echo $delen;
    echo $keer;
    
    ?>
    
</body>
</html>