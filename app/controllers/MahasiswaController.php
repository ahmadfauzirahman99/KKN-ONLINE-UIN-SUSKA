<?php

class MahasiswaController extends ControllerBase
{
    public function onConstruct()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Mahasiswa');
        $this->authorized();

        date_default_timezone_set('Asia/Jakarta'); // India Timezone
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
           'data'=>$data
        ]);
    }

}

