<?php @session_start();

require_once 'modelo/conexion.php';

$query = "  select max(id_video) as id_video from usuario u join video v on v.id_usuario = u.id_usuario where u.id_usuario = :id_usuario";
$prepared = $pdo->prepare($query);
$prepared->execute([
    'id_usuario' => $_SESSION['id_usuario']
]);
$video = $prepared->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>