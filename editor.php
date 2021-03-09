<?php @session_start();

require_once 'modelo/conexion.php';

if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
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

    <meta charset="utf-8">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-info bg-info">
        <div class="container-fluid">
            <a><i class="fas fa-user size-icons-sign mx-3"></i><?php echo $_SESSION['usuario'] ?> - Editor</a>
            <a href="cerrar.php">Cerar Session<i class="fas fa-sign-in-alt size-icons-sign mx-3"></i></a>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <nav>
                <div class="nav nav-tabs mt-4" id="nav-tab" role="tablist">
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Videos</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade mt-4 active show" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <?php require_once 'data/videos_e.php'; ?>
                </div>
            </div>

        </div>

    </div>

    <?php require_once 'pop.php'; ?>

</body>

</html>