<?php

$user = null;
$query = null;
$url  = null;

if (!empty($_POST)) {

    echo "CNX";

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

    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <div class="container-fluid">
            <a><i class="fas fa-user size-icons-sign"></i></a>
            <a><i class="fas fa-sign-in-alt size-icons-sign"></i></a>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <div class="container">
                    <form action="index.php" class="g-3 text-center mt-2 pt-4 pb-4">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-5 mt-2">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="text" placeholder="Escribe tu correo" class="form-control" id="correo" required>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-12 col-md-5">
                                <label for="pass" class="form-label">Contraseña</label>
                                <input type="password" placeholder="Escribe tu contraseña" class="form-control" id="pass" required>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <div class="col-12 col-md-5">
                                <button class="btn btn-primary" type="submit">Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>