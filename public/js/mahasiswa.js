function edit(e) {
    $.post(baseUrl + "api-mahasiswa/getOneById", {id: $(e).data("value")}, function (response) {

        if (response.data) {
            console.log(response.data);
            $.each(response.data, function (i, v) {
                if ($("#" + i) != undefined) {
                    $("#" + i).val(v);
                }
            })
            $("#modal-title").html("<i class='fa fa-pencil'></i> &nbsp;Edit Data Diri Saya");
            $("#modal").modal("show");
        } else {
            showNotification(false, e.msg);
        }
    }, 'JSON');
}

function onSave() {
    var data = $("#modalform").serialize();
    // console.log(data);
    $.post(baseUrl + "api-mahasiswa/save", data, function (response) {
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