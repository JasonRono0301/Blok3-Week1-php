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




    echo $getal1 . "+" . $getal2 . " = " . $plus . "<br>";
    echo $getal1 . "-" . $getal2 . " = " . $min . "<br>";
    echo $getal1 . "/" . $getal2 . " = " . $delen . "<br>";
    echo $getal1 . "*" . $getal2 . " = " . $keer . "<br><br>";

    //Lab 3b tafel van 6
    for($i = 0; $i <= 10; $i++){
        $uitslag = 6*$i;
        echo "6 * $i = $uitslag<br>";
    }

    $arraySom = ["3", "5", "8", "12"];
    for($a = 0; $a <= 10; $a++){
        $uitslag2 = $arraySom[0]*$a;
        $uitslag3 = $arraySom[1]*$a;
        $uitslag4 = $arraySom[2]*$a;
        $uitslag5 = $arraySom[3]*$a;

        echo "3 * $a = $uitslag2<br>";
        echo "5 * $a = $uitslag3<br>";
        echo "8 * $a = $uitslag4<br>";
        echo "12 * $a = $uitslag5<br>";

        
    }
    ?>
    
</body>
</html>