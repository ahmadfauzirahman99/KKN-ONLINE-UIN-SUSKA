<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function onConstruct()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Dashboard');

        date_default_timezone_set('Asia/Jakarta'); // India Timezone
    }

    public function authorized()
    {
        if (!$this->isLoggedIn()) {
            return $this->response->redirect('module/admin/login');
        }
    }

    public function isLoggedIn()
    {
        // Check if the variable is defined
        if ($this->session->has('AUTH_NAME')
            AND $this->session->has('AUTH_EMAIL')
            AND $this->session->has('AUTH_CREATED')
            AND $this->session->has('AUTH_UPDATED')) {
            return true;
        }
        return false;
    }

    /**
     * Write respose data in JSON
     *
     * @param Boolean $condition
     * @param String $msg #response message
     * @param null $data
     * @return string *
     */
    function writeResponse($condition, $msg = null, $data = null)
    {
        $_res = new stdClass();
        $_res->con = $condition == true ? true : false;
        $_res->msg = $msg;
        $_res->data = $data;
        $response = new \Phalcon\Http\Response();
        return $response->setContent(json_encode($_res));
    }

    public function writeDataTables($table, $primaryKey, $columns, $where = null)
    {
        $this->view->disable();

        $con = array(
            'user' => $this->config->database->username,
            'pass' => $this->config->database->password,
            'db' => $this->config->database->dbname,
            'host' => $this->config->database->host
        );
        $columnsData = array();
        foreach ($columns as $column) {
            if (isset($column[2])) {
                $columnsData[] = ["db" => $column[1], "dt" => $column[0], "formatter" => $column[2]];
            } else
                $columnsData[] = ["db" => $column[1], "dt" => $column[0]];
        }
        //        $this->view->disable();
        $response = new \Phalcon\Http\Response();

        //Set the content of the response
        return $response->setContent(json_encode(SSP::complex($_POST, $con, $table, $primaryKey, $columnsData, null, $where)));
    }

    public static function getMahasiswa($id)
    {
        $data = Mhs::findFirst(
            [
                'conditions' => 'id_mhs = :1:',
                'bind' => [
                    '1' => $id
                ]
            ]
        );

        return $data;
    }
}
