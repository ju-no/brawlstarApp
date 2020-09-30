<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Your username or password was incorrect.'));
        }
    }

    public function logout() {
        //Leave empty for now.
        $this->Flash->success(__('Good-Bye'));
        $this->redirect($this->Auth->logout());
    }
}
// session cookie
// you got to explain well
// pw checking 
//test file 
// table pw is well securitized? 