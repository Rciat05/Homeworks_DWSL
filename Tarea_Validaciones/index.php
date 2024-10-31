<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form id="validationForm" action="">
        <label>Digite un nombre y evalue si inicia con M, O, P ó S</label><br>
        <input type="text" id="nombre" required><br>
        <hr>

        <label>Digite una direccion e identifique si existe la palabra casa o apartamento al inicio de la cadena</label><br>
        <input type="text" id="direccion" required><br>
        <hr>

        <label>Identifique al final de la cadena si el correo escrito es gmail.com</label><br>
        <input type="email" id="correo" required><br>
        <hr>

        <label>Escriba un texto cualquiera e identifique cuántas palabras finalizan con "as"</label><br>
        <input type="text" id="texto" required><br>
        <hr>

        <label>Identificar si el número de teléfono es de casa (iniciando con 2) o celular (iniciando con 7)</label><br>
        <input type="text" id="telefono" required><br>
        <hr>

        <label>Identificar la compañía de celular (79 o 72 es Tigo, 77 o 75 es Movistar, 71 o 73 es Digicel)</label><br>
        <input type="text" id="compania" required><br>
        <hr>

        <label>Identificar el género (masculino = 1, femenino = 2)</label><br>
        <input type="text" id="genero" required><br>
        <hr>

        <input type="submit" value="Evaluar">
    </form>

    <div id="summary"></div>

    <script src="scripts.js"></script>
</body>
</html>
