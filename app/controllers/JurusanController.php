<?php

class JurusanController extends ControllerBase
{

    public function onConstruct()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Jurusan');
        $this->authorized();

        date_default_timezone_set('Asia/Jakarta'); // India Timezone
    }
    public function manageAction()
    {

    }

}

