<?php

class MahasiswaController extends ControllerBase
{
    public function onConstruct()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Mahasiswa');
        $this->authorized();

        date_default_timezone_set('Asia/Jakarta'); // India Timezone
    }

    public function indexAction()
    {
        $id = $this->session->get('KODE_AKUN');
        $data = Mhs::findFirst(
            [
                'conditions' => 'nim = :1:',
                'bind' => [
                    '1' => $id
                ]
            ]
        );
//        $join  = Kelompok::query()->leftJoin(Mhs::class,"")
        $join = Kelompok::findFirst(
            [
                'conditions' => " nim = :1:",
                'bind' => [
                    '1' => $data->nim
                ]
            ]
        );
//        var_dump($join);
//        exit();

        $kelompok = $this->db->fetchAll("
select
	m.*,
	k.*
from
	mhs m
	left join kelompok k on m.nim = k.nim 
	where k.kelompok = '$join->kelompok' ORDER by m.nama");
//        var_dump($kelompok);
//        exit();
        $this->view->setVars([
            'data' => $data,
            'kelompok' => $kelompok
        ]);
    }

    public function manageAction()
    {

    }

    public function kelompokAction()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Kelompok KKN');
        $data = $this->db->fetchAll("select
                                    k.nim ,
                                    k.kelompok ,
                                    m.nama,
                                    m.fakultas,
                                    m.program_studi
                                from
                                    kelompok k
                                left join mhs m on
                                    m.nim = k.nim
                                    where  1=1
                                    group  by kelompok ,nim");
        $this->view->setVars([
            'data' => $data
        ]);
    }


    // update data diri mahasiswa
    public function dataAction()
    {
        $id = $this->session->get('KODE_AKUN');
        $data = Mhs::findFirst(
            [
                'conditions' => 'nim = :1:',
                'bind' => [
                    '1' => $id
                ]
            ]
        );
//        var_dump($data);
//        exit();
        $this->view->setVars([
            'data' => $data
        ]);
    }

    public function kegiatanAction()
    {

    }

    public function prosesAction()
    {

    }

}

