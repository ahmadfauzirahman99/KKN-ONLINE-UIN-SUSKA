<?php

class DosenController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function manageAction()
    {

    }


    public function listAction()
    {
        $where = null;
        $columns = array(
            [0, "id_dosen"],
            [1, "id_dosen", function ($d, $row) {
                return " <a onclick='edit(this)' href='#' data-value='{$d}'>
                            <i class='fa fa-pencil-alt' title='Edit'></i>
                        </a>";
            }],
            [2, "nama"],
            [3, "nip_nik"],
            [4, "pangkat"],
            [5, "fakultas"],
            [6, "kelompok"],
        );
        return $this->writeDataTables("dosen", 'id_dosen', $columns, $where);
    }

    public function saveAction()
    {
        if ($this->request->isPost()) {
            $p = $this->request->getPost();

            $id_dosen = $p['id_dosen'];
            $nama = $p['nama'];
            $nip_nik = $p['nip_nik'];
            $pangkat = $p['pangkat'];
            $fakultas = $p['fakultas'];
            $kelompok = $p['kelompok'];

            if (is_null($nama)) {
                return $this->writeResponse(false, 'Nama  Tidak Boleh Kosong');
            }

            if (is_null($pangkat)) {
                return $this->writeResponse(false, 'Pangkat Tidak Boleh Kosong');
            }

            if (is_null($nip_nik)) {
                return $this->writeResponse(false, 'NIP Atau Nik Tidak Boleh Kosong');
            }

            if (is_null($fakultas)) {
                return $this->writeResponse(false, 'Fakultas Tidak Boleh Kosong');

            }
            if (is_null($kelompok)) {
                return $this->writeResponse(false, 'Kelompok Tidak Boleh Kosong');

            }
            //edit
            if (strlen($id_dosen) > 0) {
//                echo '1';
//                exit();
                $modelMhs = Dosen::findFirst([
                    'conditions' => "id_dosen = :1:",
                    'bind' => [
                        '1' => $id_dosen
                    ]
                ]);

                $modelMhs->id_dosen = $id_dosen;
                $modelMhs->nip_nik = $nip_nik;
                $modelMhs->pangkat = $pangkat;
                $modelMhs->nama = $nama;
                $modelMhs->fakultas = $fakultas;
                $modelMhs->kelompok = $kelompok;

                if ($modelMhs->update()) {
                    return $this->writeResponse(true, "Berhasil Mengupdate Data <i>{$nama}</i>");
                } else {
                    return $this->writeResponse(false, "Tidak Berhasil Mengupdate Data <i>{$nama}</i>");
                }

                // tambah
            } else {

                $modelMhs = new Dosen();
                $modelMhs->nip_nik = $nip_nik;
                $modelMhs->pangkat = $pangkat;
                $modelMhs->nama = $nama;
                $modelMhs->fakultas = $fakultas;
                $modelMhs->kelompok = $kelompok;

                if ($modelMhs->save()) {
                    return $this->writeResponse(true, "Berhasil Menambah Data <i>{$nama}</i>");
                } else {
                    return $this->writeResponse(true, "Berhasil Mengupdate Data <i>{$nama}</i>");
                }

            }
        }
    }

    public function getOneByIdAction()
    {
        if ($this->request->isPost()) {
            $p = $this->request->getPost('id');
            $data = Dosen::findFirst([
                'conditions' => 'id_dosen = :1:',
                'bind' => [
                    '1' => $p
                ]
            ]);
            return $this->writeResponse(true, 'Berhasil Mengambil Data', $data);
        }
    }

}

