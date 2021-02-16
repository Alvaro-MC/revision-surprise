function removeUser(id) {
    localStorage.setItem("usuario", id)
    document.getElementById('nameUser').innerText = document.getElementById(id).innerText
    document.getElementById('rmUser').click()
}

function removeVideo(id) {
    document.getElementById('idVideo').innerText = id
    document.getElementById('rmVideo').click()
}

function editPanel(id) {
    document.getElementById('idPanel').innerText = id
    document.getElementById('edPanel').click()
}

function marcarVideo(id) {
    document.getElementById('idVideoMarcar').innerText = id
    document.getElementById('mcVideo').click()
}

function removerUser(id) {
    $.ajax({
        url: "modelo/user.php",
        method: "POST",
        data: {
            id: id
        },
        success: function(data) {
            location.reload()
        }
    });
}

function removerVideo(id) {
    $.ajax({
        url: "modelo/video.php",
        method: "POST",
        data: {
            id: id,
            action: 'remove'
        },
        success: function(data) {
            location.reload()
        }
    });
}

function editarPanel(id) {
    a = document.getElementById('new-stock').value
    $.ajax({
        url: "modelo/panel.php",
        method: "POST",
        data: {
            id: id,
            stock: a
        },
        success: function(data) {
            location.reload()
        }
    });
}

function completarVideo(id) {
    $.ajax({
        url: "modelo/video.php",
        method: "POST",
        data: {
            id: id,
            action: 'edit'
        },
        success: function(data) {
            location.reload()
        }
    });
}