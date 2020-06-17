<?php

use Phalcon\Mvc\View;

class AuthController extends \Phalcon\Mvc\Controller
{

    public function onConstruct()
    {
        $this->tag->setTitle('LPPM UIN SUSKA:: Login');
        $this->view->setMainView('login');
        date_default_timezone_set('Asia/Jakarta'); // India Timezone
    }

    public function indexAction()
    {
//$p = $this->security->hash(123456789);
//var_dump($p);
//exit();
    }

    public function prosesAction()
    {
        if ($this->request->isPost()) {
            $a = $_POST['masuk'];
            $e = $a[0];
            $p = $a[1];


//            $user =
//            var_dump($u);
            $user = Users::findFirst([
                'kode_akun = :kode_akun:',
                'bind' => [
                    'kode_akun' => $e,
                ]
            ]);

//            var_dump($this->security->checkHash($p, $user->password));
//            exit();

            // Check User Active
            if ($user->active != 1) {
                $this->flashSession->error("Pengguna Tidak Aktif");
                return $this->response->redirect('module/admin/login');
            }

            # Doc :: https://docs.phalconphp.com/en/3.3/security
            if ($user) {
                if ($this->security->checkHash($p, $user->password)) {
                    # https://docs.phalconphp.com/en/3.3/session#start

                    // Set a session
                    $this->session->set('AUTH_ID', $user->id);
                    $this->session->set('AUTH_NAME', $user->name);
                    $this->session->set('AUTH_EMAIL', $user->email);
                    $this->session->set('AUTH_CREATED', $user->created);
                    $this->session->set('AUTH_UPDATED', $user->updated);
                    $this->session->set('AUTH_ROLE', $user->role);
                    $this->session->set('KODE_AKUN', $user->kode_akun);
                    $this->session->set('IS_LOGIN', 1);

                    // $this->flashSession->success("Login Success");
                    return $this->response->redirect('dashboard/admin/manage');
                }
            } else {
                // To protect against timing attacks. Regardless of whether a user
                // exists or not, the script will take roughly the same amount as
                // it will always be computing a hash.
                $this->security->hash(rand());
            }

            // The validation has failed
            $this->flashSession->error("Invalid login");
            return $this->response->redirect('module/admin/login');
        }
    }


    public function keluarAction()
    {
        # https://docs.phalconphp.com/en/3.3/session#remove-destroy

        // Destroy the whole session
        $this->session->destroy();
        return $this->response->redirect('module/admin/login');
    }


}

