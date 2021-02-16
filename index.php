<?php

if (!empty($_POST)) {

    require_once 'modelo/conexion.php';

    $query = "SELECT * FROM usermc WHERE usuario = :usuario";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'usuario' => $_POST['usuario']
    ]);
    $user = $prepared->fetch(PDO::FETCH_ASSOC);

    if (isset($user['usuario'])) {

        if ($user['usuario'] == $_POST['usuario'] && password_verify($_POST['pass'], $user['contrasena'])) {
            session_start();
            $_SESSION['id_usuario'] = $user['id_usuario'];
            $_SESSION['usuario'] = $user['usuario'];
            $_SESSION['nombre'] = $user['nombre'];

            switch($user['rol']){
                case 'observador':
                    header('Location: observador.php');
                    break;
                case 'editor':
                    header('Location: editor.php');
                    break;
                case 'supervisor':
                    header('Location: supervisor.php');
                    break;
            }
            
        }else{
            echo "No son iguales";
        }
    }else{
        "No esta definido";
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
                    <form action="index.php" method="post" class="g-3 text-center mt-2 pt-4 pb-4">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-5 mt-2">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" placeholder="Escribe tu usuario" class="form-control" name="usuario" id="usuario" required>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-2">
                            <div class="col-12 col-md-5">
                                <label for="pass" class="form-label">Contraseña</label>
                                <input type="password" placeholder="Escribe tu contraseña" class="form-control" name="pass" id="pass" required>
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