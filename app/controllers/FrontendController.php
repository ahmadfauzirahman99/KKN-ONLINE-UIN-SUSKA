<?php

class FrontendController extends ControllerBase
{

    public function onConstruct()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Landing');
        $this->view->setMainView('front');
        date_default_timezone_set('Asia/Jakarta'); // India Timezone
    }

    public function indexAction()
    {

    }

    public function beritaAction()
    {

    }

    public function kknonlineAction(){

    }

}

