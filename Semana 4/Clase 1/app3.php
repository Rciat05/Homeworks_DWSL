<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="app3.php" method="post">
        <table>
            <tr>
                <th>MATEMATICAS</th>
                <th>LENGUAJE</th>
                <th>CIENCIAS</th>
                <th>SOCIALES</th>
                <th>MORAL</th>
            </tr>
            <tr>
                <td><input type="number" name="m" id="" value="<?php echo isset($_POST['m']) ? $_POST['m'] : ''; ?>"></td>
                <td><input type="number" name="l" id="" value="<?php echo isset($_POST['l']) ? $_POST['l'] : ''; ?>"></td>
                <td><input type="number" name="c" id="" value="<?php echo isset($_POST['c']) ? $_POST['c'] : ''; ?>"></td>
                <td><input type="number" name="s" id="" value="<?php echo isset($_POST['s']) ? $_POST['s'] : ''; ?>"></td>
                <td><input type="number" name="mo" id="" value="<?php echo isset($_POST['mo']) ? $_POST['mo'] : ''; ?>"></td>
            </tr>
        </table>
        <input type="submit" value="Promediar">
        <input type="submit" name="reset" value="Nuevo promedio.">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=== "POST"){
$matematica= isset($_POST['m']) ? $_POST['m']:"";
$lenguaje= isset($_POST['l']) ? $_POST['l']:"";
$ciencia= isset($_POST['c']) ? $_POST['c']:"";
$moral= isset($_POST['mo']) ? $_POST['mo']:"";
$sociales= isset($_POST['s']) ? $_POST['s']:"";


$promedio = ($matematica+$lenguaje+$ciencia+$moral+$sociales)/5;
echo "EL PROMEDIO DEL ESTUDIANTE ES:".$promedio;
}
?>