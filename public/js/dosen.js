function edit(e) {
    $.post(baseUrl + "dosen/getOneById", {id: $(e).data("value")}, function (response) {

        if (response.data) {
            console.log(response.data);
            $.each(response.data, function (i, v) {
                if ($("#" + i) != undefined) {
                    $("#" + i).val(v);
                }
            })
            $("#modal-title").html("<i class='fa fa-pencil'></i> &nbsp;Edit Data Dosen");
            $("#modal").modal("show");
        } else {
            showNotification(false, e.msg);
        }
    }, 'JSON');
}

function tambah() {
    $("#nama").val("");
    $("#id_dosen").val("");
    $("#nip_nik").val("");
    $("#pangkat").val("");
    $("#fakultas").val("");
    $("#kelompok").val("");
    $("#modal-title").html("<i class='fa fa-pencil'></i> &nbsp;Edit Data Dosen");
    $("#modal").modal("show");
}

function onSave() {
    var data = $("#modalform").serialize();
    // console.log(data);
    $.post(baseUrl + "dosen/save", data, function (response) {
        console.log(response);
        if (response.con) {
            showNotification(true, response.msg);
            updateDataTable();
            $("#modal").modal("hide");
        } else {
            showNotification(false, response.msg);

        }
    }, 'JSON')
}

function updateDataTable() {
    $('#responsive-datatable').DataTable().ajax.reload(null, false);
}


function showNotification(con, msg, icon) {
    $.notify({
        icon: (icon === undefined) ? (con ? "pe-7s-loop" : "pe-7s-attention") : icon,
        message: (con == true ? "<b>Berhasil...</b>" : "<b>Oops...</b>") + "<br/>" + msg
    }, {
        type: (con == true ? "success" : "warning"),
        timer: 3000
    });
}