<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <form action="enviar.php" method="post">
        <input type="text" name="asunto"/><br/><br/>
        <textarea name="mensaje"/></textarea>
        <input type="submit" value="Enviar Correo">
    </form>

</body>
</html>