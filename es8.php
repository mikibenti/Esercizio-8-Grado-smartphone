<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $modello = "Iphone 16 Pro Max";
        $grado = "a";  //i gradi possono essere 'a', 'b' o 'c'
        $h2 = "";
        switch ($grado) {
            case "a" :
                $h2 = "<h2>$modello perfetto, pari al nuovo</h2>";
            break;
            case "b" :
                $h2 = "<h2>$modello in ottime condizioni</h2>";
            break;
            case "c" :
                $h2 = "<h2>$modello con graffi e/o segni di usura</h2>";
            break;
            default : 
                $h2 = "<h2 style='color:red;'>errore: grado non riconosciuto</h2>";
            break;
        }
        echo $h2;
    ?>
</body>
</html>