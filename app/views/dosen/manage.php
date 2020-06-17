<?php
?>
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">LPPM UIN SUSKA</a></li>
                        <li class="breadcrumb-item active">Dosen</li>
                    </ol>
                </div>
                <h4 class="page-title">Dosen KKN Online</h4>
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
                    <button data-animation="fadein" data-title="Mahasiswa" data-plugin="modal"
                            data-overlayColor="#36404a"
                            data-backdrop="static" data-keyboard="false"
                            onclick="tambah()"
                            class="btn btn-primary waves-effect waves-light float-right">Tambah Dosen
                    </button>
                </p>

                <table id="responsive-datatable" class="table table-bordered table-striped  dt-responsive nowrap"
                       cellpadding="0" width="100%">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-center" width="10%">Aksi</th>
                        <th>Nik / Nip</th>
                        <th>Nama</th>
                        <th>Pangkat/Jabatan/Gol./Ruang</th>
                        <th>Fakultas</th>
                        <th>Kelompok</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th class="text-center" width="10%">Aksi</th>
                        <th>Nik / Nip</th>
                        <th>Nama</th>
                        <th>Pangkat/Jabatan/Gol./Ruang</th>
                        <th>Fakultas</th>
                        <th>Kelompok</th>
                    </tr>
                    </tfoot>
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
                <h4 class="modal-title" id="modal-title">Dosen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form name="modalform" id="modalform">
                    <input type="hidden" name="id_dosen" id="id_dosen">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" value="" class="form-control"
                               placeholder="Masukan Nama Lengkap Dengan Gelar"
                               id="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Nip / Nik</label>
                        <input type="text" name="nip_nik" class="form-control" placeholder="Masukan Nip Atau Nik"
                               id="nip_nik">
                    </div>
                    <div class="form-group">
                        <label for="">Pangkat/Jabatan/Gol./Ruang</label>
                        <input type="text" name="pangkat" class="form-control"
                               placeholder="Masukan Pangkat/Jabatan/Gol./Ruang"
                               id="pangkat">
                    </div>

                    <div class="form-group">
                        <label for="">Fakultas</label>
                        <input type="text" name="fakultas" class="form-control" placeholder="Fakutlas"
                               id="fakultas">
                    </div>
                    <div class="form-group">
                        <label for="">Kelompok</label>
                        <select name="kelompok" id="kelompok" class="form-control">
                            <?php for ($i = 1; $i < 227; $i++) : ?>
                                <option value="Group <?= $i ?>">Group <?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
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
                "url": baseUrl + 'dosen/admin/list',
                "type": "POST"
            },
            "columnDefs": [
                {
                    "width": "100px",
                    "targets": 0
                },
                {
                    "class": "text-center",
                    "targets": [0, 1, 2, 3, 4, 5, 6]
                }
            ],

            "order": [
                [0, "ASC"]
            ],
        });
    })
</script>
<script src="<?= $this->url->get('js/dosen.js') ?>"></script>