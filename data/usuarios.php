<table id="usuarios" class="table table-striped table-bordered">
    <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Herramientas</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryResult = $pdo->prepare("select * from usuario where estado='activo' order by id_usuario asc");
        $queryResult->execute([]);
        while ($user = $queryResult->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $user['id_usuario']; ?></td>
                <td id="<?php echo $user['id_usuario']; ?>"><?php echo $user['nombre']; ?></td>
                <td><?php echo $user['apellido']; ?></td>
                <td><?php echo $user['correo']; ?></td>
                <td>
                    <button class="btn btn-danger" onclick="removeUser(<?php echo $user['id_usuario']; ?>)"><i class="fas fa-trash-alt"></i></button>
                    <button class="btn btn-warning" disabled><i class="fas fa-edit"></i></button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
    </ul>
</nav>