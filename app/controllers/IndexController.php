<?php

class IndexController extends ControllerBase
{

    public function onConstruct()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Fakultas');
        $this->authorized();
        date_default_timezone_set('Asia/Jakarta'); // India Timezone
    }

    public function indexAction()
    {


        if ($this->session->get('AUTH_ROLE') == 'Mhs') {
            return $this->response->redirect('mahasiswa/home');
        }
//        $this->view->;
        $mahasiswa = Mhs::count('id_mhs');
        $kelompok = $mahasiswa / 20;
//        $mhs = Mhs::query()->groupBy("jenis_kelamin")
        $mhs = $this->db->fetchAll("	select count(1) as jumlah, jenis_kelamin from  mhs m group by jenis_kelamin ");
        /*    var_dump($mhs[0]['jumlah']);
            var_dump($mhs[1]['jumlah']);
            exit();*/
        $this->view->setVars([
            'mahasiswa' => $mahasiswa,
            'kelompok' => (int)$kelompok,
            'mhs' => $mhs
        ]);
    }




}

