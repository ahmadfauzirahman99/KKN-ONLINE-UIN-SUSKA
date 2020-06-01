<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">LPPM UIN SUSKA</a></li>
                        <li class="breadcrumb-item active">Mahasiswa</li>
                    </ol>
                </div>
                <h4 class="page-title">Mahasiswa KKN Online</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Data Mahasiswa</h4>
                <p class="text-muted font-14 mb-3">
                    Data Mahasiwa Uin Suska Riau
                </p>
                <table id="mahasiswa-datatable" class="table table-bordered table-striped  dt-responsive nowrap" cellpadding="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-center" width="10%">Aksi</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nim</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Fakultas</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#mahasiswa-datatable").DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": baseUrl + "api-mahasiswa/admin/list",
                "type": "POST"
            },
            "columnDefs": [
                {
                    "width": "100px",
                    "targets": 0
                },
                {
                    "class": "text-center",
                    "targets": [0,1,2,3,4,5,6,7]
                }
            ],

            "order": [
                [1, "ASC"]
            ],
        });
    })
</script>