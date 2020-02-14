<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
</head>
<body>
    <?php
    //Lab 2.

    // 1.Output met een H1 tag.
        echo "<h1> Hello world</h1>";
    // 2. Constanten.
        define("TEST", "Hello World");
        echo TEST;
        echo "<br>";
    // 3. Variabelen.
        $Test1 = "Learing PHP";
        echo $Test1;
        echo "<br>Hello World<br>";
    // 4. 2 Variabelen.
        $woord1 = "Hello";
        $woord2 = "World<br>";
        echo $woord1;
        echo $woord2;
    // 5. Array.
        $array = ['Hello', 'World'];
        echo $array[0]  . $array[1];
    ?>
    
</body>
</html>