<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login de ingreso</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <form  action="validar_r.php" method="POST" >
         <h1>Registro</h1>
            <p>usuario</p>
            <input type="text" placeholder="ingrese un usuario" name="user">
                 <p>password</p>
                 <input type="password" placeholder="ingrese una password" name="pass"><p></p>
                     <input type="submit"  value="Ingresar">
                     <a href="index.php" title="volver" del enlace”>volver</a>

    </form>
</body>
</html>