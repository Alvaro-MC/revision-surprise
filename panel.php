<?php @session_start();

require_once 'modelo/conexion.php';

/*
if(!isset($_SESSION['correo'])){
    header('Location: index.php');
}
*/
/*
$query = "  select max(id_video) as id_video from usuario u join video v on v.id_usuario = u.id_usuario where u.id_usuario = :id_usuario";
$prepared = $pdo->prepare($query);
$prepared->execute([
    'id_usuario' => $_SESSION['id_usuario']
]);
$video = $prepared->fetch(PDO::FETCH_ASSOC);
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surprise</title>

    <?php require_once 'head.php'; ?>

    <meta charset="utf-8">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <div class="container-fluid">
            <a><i class="fas fa-user size-icons-sign"></i></a>
            <a><i class="fas fa-sign-in-alt size-icons-sign"></i></a>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <nav>
                <div class="nav nav-tabs mt-4" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Usuarios</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Videos</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Paneles</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active mt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <?php require_once 'data/usuarios.php'; ?>
                </div>
                <div class="tab-pane fade mt-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <?php require_once 'data/videos.php'; ?>
                </div>
                <div class="tab-pane fade mt-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <?php require_once 'data/paneles.php'; ?>
                </div>
            </div>

        </div>

    </div>

    <?php require_once 'pop.php'; ?>

</body>

</html>