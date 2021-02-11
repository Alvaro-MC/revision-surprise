<?php

require 'conexion.php';

if($_POST['stock']>=0){

    $query = "update panel set stock_videos = :stock WHERE panel.id_panel = :id_panel";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'stock' => $_POST['stock'],
        'id_panel' => $_POST['id']
    ]);
}else{
    echo "Ingresa un numero correcto";
}

?>