<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">LPPM UIN SUSKA</a></li>
                        <li class="breadcrumb-item active">Data Diri Saya</li>
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
                <table id="responsive-datatable" class="table table-bordered table-striped  dt-responsive nowrap"
                       cellpadding="0" width="100%">
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

<!-- sample modal content -->
<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Pengguna</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form name="modalform" id="modalform">
                    <input type="hidden" name="id_mhs" id="id_mhs">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap"
                               id="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Induk Mahasiswa</label>
                        <input type="text" name="nim" readonly class="form-control" placeholder="Masukan Nim"
                               id="nim">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Fakultas</label>
                        <input type="text" name="fakultas" readonly class="form-control" placeholder="Fakutlas"
                               id="fakultas">
                    </div>
                    <div class="form-group">
                        <label for="">Program Studi</label>
                        <input type="text" name="program_studi" readonly class="form-control"
                               placeholder="Program Studi"
                               id="program_studi">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" placeholder="Alamat"
                                  id="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Telp</label>
                        <input type="text" name="telp" class="form-control" placeholder="Nomor Hp Yang Aktif"
                               id="telp"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" form="modalform" id="save" class="btn btn-primary waves-effect waves-light">Save
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $(document).ready(function () {
        $("#responsive-datatable").DataTable({
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
                    "targets": [0, 1, 2, 3, 4, 5, 6, 7]
                }
            ],

            "order": [
                [1, "ASC"]
            ],
        });
    })
</script>


<script src="<?= $this->url->get('js/mahasiswa.js') ?>"></script>