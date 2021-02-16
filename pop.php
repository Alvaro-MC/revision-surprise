<!-- Button Remover USUARIO -->
<button id="rmUser" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalremoveuser" style="display:none"></button>
<!-- Modal USUARIO -->
<div class="modal fade" id="modalremoveuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estas seguro que quieres eliminar a <a id="nameUser"><strong></strong></a> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" onclick="removerUser(localStorage.getItem('usuario'))">Eliminar</button>
            </div>
        </div>
    </div>
</div>


<!-- ****************************************************************************************************** -->


<!-- Button Remover VIDEO -->
<button id="rmVideo" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalremovevideo" style="display:none"></button>
<!-- Modal VIDEO -->
<div class="modal fade" id="modalremovevideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estas seguro que quieres eliminar el video Nro : <a id="idVideo"><strong></strong></a> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" onclick="removerVideo(document.getElementById('idVideo').text)">Eliminar</button>
            </div>
        </div>
    </div>
</div>


<!-- ****************************************************************************************************** -->


<!-- Button Editar PANEL -->
<button id="edPanel" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaleditpanel" style="display:none"></button>
<!-- Modal PANEL -->
<div class="modal fade" id="modaleditpanel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Panel <a value="" id="idPanel"><strong></strong></a></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row text-center mt-3 mb-3">
                        <div class="col-12">
                            <label for="new-stock">Stock de Panel</label>
                        </div>
                        <div class="col-12">
                            <input type="number" id="new-stock">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" onclick="editarPanel(document.getElementById('idPanel').text)">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- ****************************************************************************************************** -->


<!-- Button Marcar VIDEO -->
<button id="mcVideo" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalmarcarvideo" style="display:none"></button>
<!-- Modal VIDEO -->
<div class="modal fade" id="modalmarcarvideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estas seguro que quieres marcar como completado el video Nro : <a id="idVideoMarcar"><strong></strong></a> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger" onclick="completarVideo(document.getElementById('idVideoMarcar').text)">Marcar</button>
            </div>
        </div>
    </div>
</div>