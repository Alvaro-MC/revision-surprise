<?php

$user = null;
$query = null;
$url  = null;

if (!empty($_POST)) {

    require_once 'modelo/conexion.php';

    $query = "SELECT * FROM usuario WHERE correo = :correo";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'correo' => $_POST['correo']
    ]);
    $user = $prepared->fetch(PDO::FETCH_ASSOC);

    if (isset($user['correo'])) {

        if ($user['correo'] == $_POST['correo'] && password_verify($_POST['pass'], $user['contrasena'])) {
            session_start();
            $_SESSION['id_usuario'] = $user['id_usuario'];
            $_SESSION['usuario'] = $user['correo'];
            $_SESSION['nombre'] = $user['nombre'];
            $_SESSION['correo'] = $user['correo'];

            header("Location: panel.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surprise</title>

    <?php require_once 'head.php'; ?>

</head>

<body>
    <nav></nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="row g-3">
                    <div class="col-12">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" placeholder="Escribe tu correo" class="form-control" id="correo" required>
                    </div>
                    <div class="col-12">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="password" placeholder="Escribe tu contraseña" class="form-control" id="pass" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>