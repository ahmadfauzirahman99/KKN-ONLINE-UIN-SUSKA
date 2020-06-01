<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">LPPM UIN SUSKA</a></li>
                        <li class="breadcrumb-item active">Kelompok</li>
                    </ol>
                </div>
                <h4 class="page-title">Kelompok KKN Online</h4>
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
                <table id="datatable" class="table table-bordered table-striped  dt-responsive nowrap" cellpadding="0" width="100%">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Kelompok</th>
                        <th>Nama</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $no=1;foreach ($data as $i): ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $i['nim'] ?></td>
                        <td><?= $i['kelompok'] ?></td>
                        <td><?= $i['nama'] ?></td>
                    </tr>
                    <?php   $no++;endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
