<?php 
App::uses('AppController', 'Controller');


class UsersController extends AppController 
{
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('sign_up');
    }


    public function sign_up()
	{
        $this->layout = 'security';
		if($this->request->is('post'))
		{
			$this->User->saveAll($this->request->data);
		   return $this->redirect($this->Auth->redirectUrl());
        }
		
    }

    public function dashboard()
	{
       	
    }

    public function login() { 
        /*echo "<pre>";*/
        //var_dump($this->request->is('post'));
        /*print_r($this->request->data);
        exit;*/
         $this->layout = 'security';

        if ($this->request->is('post')) {

            //echo empty($this->request->is('post'));
            // echo "<pre>";
            // print_r($this->request->data);
            // var_dump($this->Auth->login());
            // exit;
            if ($this->Auth->login()) {
                // echo "hello";
                // exit;
                return $this->redirect($this->Auth->redirectUrl());
                }

            // $this->Flash->error(__('Invalid username or password, try again'));
                $fail=1;
              $this->set('integer', $fail);
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function test()
    {

    }

}