<?php

require 'conexion.php';

if(isset($_POST['id'])){

    $query = "update usuario set estado = 'inactivo' WHERE usuario.id_usuario = :id_usuario";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'id_usuario' => $_POST['id']
    ]);
}else{
    echo "No se pudo eliminar el video";
}

?>