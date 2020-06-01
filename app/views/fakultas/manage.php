<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">LPPM UIN SUSKA</a></li>
                        <li class="breadcrumb-item active">Fakultas</li>
                    </ol>
                </div>
                <h4 class="page-title">Fakultas</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Data Fakultas</h4>
                <p class="text-muted font-14 mb-3">
                    Data Fakultas Uin Suska Riau</code>.
                </p>
                <table id="datatable" class="table table-bordered table-striped  nowrap" cellpadding="0" width="100%">
                    <thead>
                    <tr>
                        <th width="4%">No</th>
                        <th width="5%">Aksi</th>
                        <th width="50%">Nama Fakultas</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($fakultas as $list): ?>
                            <tr>
                                <td width="4%" class="text-center"><?= $no ?></td>
                                <td width="5%" class="text-center">
                                    <button class="btn btn-icon btn-sm waves-effect btn-warning">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button class="btn btn-icon btn-sm waves-effect waves-light btn-danger">
                                        <i class="fas fa-trash"></i></button>
                                </td>
                                <td width="50%"><?= $list->nama_fakultas ?></td>
                            </tr>
                    <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>