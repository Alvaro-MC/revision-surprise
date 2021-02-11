<?php

require 'conexion.php';

if(isset($_POST['id'])){

    $query = "update video set estado = 'inactivo' WHERE video.id_video = :id_video";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'id_video' => $_POST['id']
    ]);
}else{
    echo "No se pudo eliminar el video";
}

?>