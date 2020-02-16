<?php
        date_default_timezone_set("Europe/Amsterdam");
        $text = "";
        $tijd = "H";
        $tijdsduur = "H:i";

        if($tijd >= 6 && 12 ){
            $text == "Morning";
            $tijd == "morning";
        } elseif($tijd >= 12 && 18) {
            $text == "Afternoon";
            $tijd === "afternoon";
        } elseif($tijd >= 18 && 24){
            $text == "Evening";
            $tijd == "evening";
        } elseif($tijd >= 24 && 6) {
            $text == "Night";
            $tijd == "night";

        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
    <title>index</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
</body>
</html>