<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="estilos2.css">
    <title>Recibe datos PHP</title>
</head>
<body>
    <h1 id= "bienvenido">Bienvenido al Sistema</h1>
    
    <h3 id= "datos">Los datos ingresados son:</h3>

    <p>Tu usuario: <?php echo $_POST["usuario"]; ?></p>
    
    <p>Tu Clave: <?php echo $_POST["password"]; ?> </p>

</body>
</html>
