<?php

class FakultasController extends ControllerBase
{
    public function onConstruct()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Fakultas');
        $this->authorized();

        date_default_timezone_set('Asia/Jakarta'); // India Timezone
    }

    public function manageAction()
    {
        $fakultas= Fakultas::find(['order'=>'nama_fakultas ASC']);
        $this->view->setVars(
            ['fakultas'=>$fakultas]
        );
    }

}

