<?php

if (isset($_POST['id'])) {

    switch($_POST['action']){
        case 'remove': remove();
            break;
        case 'edit': edit();
            break;
    }

}

function remove(){
    require 'conexion.php';
    //Actualizo el estado del video a inactivo
    $query = "update video set estado = 'inactivo' WHERE video.id_video = :id_video";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'id_video' => $_POST['id']
    ]);
}

function edit(){
    require 'conexion.php';
    //Marca como publicacion completada un video
    $query = "update video set publicacion = 'Completado' WHERE video.id_video = :id_video";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'id_video' => $_POST['id']
    ]);
}