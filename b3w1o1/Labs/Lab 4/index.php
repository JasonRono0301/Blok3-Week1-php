<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4</title>
</head>
<body>
    <?php
        $favColor = 'rood';

        switch ($favColor){

            case 'paars';
                echo "druiven zijn paars";
                break;

            case 'bruin';
            case 'geel';
                echo "bananen zijn geel, maar kunnen ook bruin zijn";
            break;

            case 'oranje';
                echo "sinaas";

            case 'groene';
            case 'rood';
                echo "appels zijn".$favColor;
                break;
            
            default:
                echo "voor". $favColor. " is geen fruit bekend";
        }
    
    
    
    ?>
    
</body>
</html>