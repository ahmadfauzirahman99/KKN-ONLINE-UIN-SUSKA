<?php

class SettingController extends ControllerBase
{

    public function onConstruct()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Setting');
        $this->authorized();

        date_default_timezone_set('Asia/Jakarta'); // India Timezone
    }
    public function manageAction()
    {

    }

}

