<?php

class ApiMahasiswaController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function ambilAction()
    {
        $where = null;
        if ($this->session->get('AUTH_ROLE') == 'Mhs') {
            $nim = $this->session->get('KODE_AKUN');
            $where = "nim = '$nim'";
        }
        $columns = array(
            [0, "id_mhs"],
            [1, "id_mhs", function ($d, $row) {
                return " <a onclick='edit(this)' href='#' data-value='{$d}'>
                            <i class='fa fa-pencil-alt' title='Edit'></i>
                        </a>";
            }],
            [2, "nama"],
            [3, "nim"],
            [4, "jenis_kelamin"],
            [5, "program_studi"],
            [6, "alamat"],
            [7, "telp"],
            [8, "fakultas"],
        );
        return $this->writeDataTables("mhs", 'id_mhs', $columns, $where);
    }

    public function kelompokAction()
    {
        $columns = array(
            [0, "id_kelompok"],
            /*[1, "id_kelompok", function ($d, $row) {
                return "<a onclick='remove(this)' href='#' data-value='{$d}'>
                            <i class='fa fa-trash' title='Hapus'></i>
                        </a> &nbsp;|&nbsp; 
                        <a onclick='edit(this)' href='#' data-value='{$d}'>
                            <i class='fa fa-pencil-alt' title='Edit'></i>
                        </a>";
            }],*/
            [1, "nim"],
            [2, "kelompok"],
            [3, "id_kelompok", function ($d, $row) {
                $data = ControllerBase::getMahasiswa($d);
                return $data->nama;
            }],
        );
        return $this->writeDataTables("kelompok", 'id_kelompok', $columns);
    }

    public function getOneByIdAction()
    {
        if ($this->request->isPost()) {
            $p = $this->request->getPost('id');
            $data = Mhs::findFirst([
                'conditions' => 'id_mhs = :1:',
                'bind' => [
                    '1' => $p
                ]
            ]);
            return $this->writeResponse(true, 'Berhasil Mengambil Data', $data);
        }
    }

    public function saveAction()
    {
        if ($this->request->isPost()) {
            $p = $this->request->getPost();

            $id_mhs = $p['id_mhs'];
            $nama = $p['nama'];
            $nim = $p['nim'];
            $jenis_kelamin = $p['jenis_kelamin'];
            $alamat = $p['alamat'];
            $telp = $p['telp'];

            if (is_null($nama)) {
                return $this->writeResponse(false, 'Nama  Tidak Boleh Kosong');
            }

            if (is_null($jenis_kelamin)) {
                return $this->writeResponse(false, 'Harap Pilih Jenis Kelamin');
            }

            if (is_null($nim)) {
                return $this->writeResponse(false, 'Nim Tidak Boleh Kosong');
            }

            if (is_null($alamat)) {
                return $this->writeResponse(false, 'Alamat  Tidak Boleh Kosong');

            }
            if (is_null($telp)) {
                return $this->writeResponse(false, 'Telp  Tidak Boleh Kosong');

            }
            //edit
            if (strlen($id_mhs) > 0) {
                $modelMhs = Mhs::findFirst([
                    'conditions' => "id_mhs = :1:",
                    'bind' => [
                        '1' => $id_mhs
                    ]
                ]);

                $modelMhs->id_mhs = $id_mhs;
                $modelMhs->nim = $nim;
                $modelMhs->jenis_kelamin = $jenis_kelamin;
                $modelMhs->nama = $nama;
                $modelMhs->alamat = $alamat;
                $modelMhs->telp = $telp;

                if ($modelMhs->update()) {
                    return $this->writeResponse(true, "Berhasil Mengupdate Data <i>{$nama}</i>");
                } else {
                    return $this->writeResponse(false, "Tidak Berhasil Mengupdate Data <i>{$nama}</i>");
                }

                // tambah
            } else {
                $modelMhs = new Mhs();
                $modelMhs->id_mhs = $id_mhs;
                $modelMhs->nim = $nim;
                $modelMhs->jenis_kelamin = $jenis_kelamin;
                $modelMhs->nama = $nama;
                $modelMhs->alamat = $alamat;

                if ($modelMhs->save()) {
                    return $this->writeResponse(true, "Berhasil Menambah Data <i>{$nama}</i>");
                } else {
                    return $this->writeResponse(true, "Berhasil Mengupdate Data <i>{$nama}</i>");
                }

            }
        }
    }


}

