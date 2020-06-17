<?php
?>


<div class="row">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">LPPM UIN SUSKA</a></li>
                            <li class="breadcrumb-item active">Data Diri</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Data Diri Mahasiswa</h4>
                </div>
            </div>
        </div>
        <div class="col-xl-12">

            <div class="card card-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#home1" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Data Diri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Kelompok</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="home1">
                        <table class="table table-bordered table-striped" width="100%">
                            <tr>
                                <th>Nama Lengkap</th>
                                <td><?= $data->nama ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Induk Mahasiswa</th>
                                <td><?= $data->nim ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td><?= $data->jenis_kelamin ?></td>
                            </tr>
                            <tr>
                                <th>Fakultas</th>
                                <td><?= $data->fakultas ?></td>
                            </tr>
                            <tr>
                                <th>Program Studi</th>
                                <td><?= $data->program_studi ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><?= $data->alamat ?></td>
                            </tr>
                            <tr>
                                <th>Telepon</th>
                                <td><?= $data->telp ?></td>
                            </tr>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile1">
                        <h4 class="mt-0 header-title">Data Kelompok KKN Saya</h4>
                        <hr class="mr-sm-4">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" width="100%">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Fakultas</th>
                                <th class="text-center">Program Studi</th>
                                <th class="text-center">Telp</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $no = 1;
                            foreach ($kelompok as $item): ?>
                            <tr>
                                <td class="text-center"><?= $no ?></td>
                                <td class="text-center"><?= $item['nama'] ?></td>
                                <td class="text-center"><?= $item['fakultas'] ?></td>
                                <td class="text-center"><?= $item['program_studi'] ?></td>
                                <td class="text-center"><?= $item['telp'] ?></td>

                            </tr>
                                <?php $no++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div>