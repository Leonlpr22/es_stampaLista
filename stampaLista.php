<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaLista($num, $tipo) {
            
            if ($tipo === "o") {
                echo "<ol>\n"; // lista ordinata
            } else {
                echo "<ul>\n"; // lista non ordinata
            }

            for ($i = 1; $i <= $num; $i++) {
                if ($i % 2 == 0 || $i % 5 == 0) {
                    echo "<li>$i</li>\n";
                }
            }

            if ($tipo === "o") {
                echo "</ol>\n"; 
            } else {
                echo "</ul>\n"; 
            }
        }

        stampaLista(10, "o"); // stampa una lista ordinata
        stampaLista(15, "u"); // stampa una lista non ordinata
        stampaLista(20, "x"); // stampa una lista non ordinata

    ?>

</body>
</html>