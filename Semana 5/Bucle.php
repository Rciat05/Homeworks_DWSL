<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle usando PHP</title>
</head>
<body>
    
<div class="container">
        <h1>Ejemplo de bucle do-while en PHP</h1>
        <ul>
            <?php
            $numero = 6;
            do {
                echo "<li>Número: $numero</li>";
                $numero++;
            } while ($numero <= 10);
            ?>
        </ul>
    </div>

</body>
</html>



