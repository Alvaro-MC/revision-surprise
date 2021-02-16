<h4 class="text-center">Información</h4>
<table id="usuarios" class="table table-striped table-bordered">
    <thead>
        <tr class="table-primary">
            <th>Concepto</th>
            <th class="text-center">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryResult = $pdo->prepare("select count(*) as user_total from usuario where estado='activo'");
        $queryResult->execute([]);
        $result = $queryResult->fetch(PDO::FETCH_ASSOC);
        ?>
        <tr>
            <td>Usuarios</td>
            <td class="text-center"><?php echo $result['user_total']; ?></td>
        </tr>
        <?php
        $queryResult = $pdo->prepare("select count(*) as user_inter from usuario where organizacion='interno' and estado='activo'");
        $queryResult->execute([]);
        $result = $queryResult->fetch(PDO::FETCH_ASSOC);
        ?>
        <tr>
            <td>Usuarios internos</td>
            <td class="text-center"><?php echo $result['user_inter']; ?></td>
        </tr>
        <?php
        $queryResult = $pdo->prepare("select count(*) as user_ext from usuario where organizacion='externo' and estado='activo'");
        $queryResult->execute([]);
        $result = $queryResult->fetch(PDO::FETCH_ASSOC);
        ?>
        <tr>
            <td>Usuarios externos</td>
            <td class="text-center"><?php echo $result['user_ext']; ?></td>
        </tr>
    </tbody>
</table>
<h4 class="text-center mt-3">Registros</h4>
<table id="usuarios" class="table table-striped table-bordered">
    <thead>
        <tr class="table-primary">
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $queryResult = $pdo->prepare("select * from usuario where estado='activo' order by id_usuario asc");
        $queryResult->execute([]);
        while ($user = $queryResult->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $user['nombre']; ?></td>
                <td><?php echo $user['apellido']; ?></td>
                <td><?php echo $user['correo']; ?></td>
                <td><?php echo $user['telefono']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!--
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
    </ul>
</nav>
-->