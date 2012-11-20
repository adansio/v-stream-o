<?php

class UsersController extends AppController {
	var $uses = array('User','Carrera');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('carreras', $this->Carrera->find('all'));
		$this->Auth->allow('add'); // Letting users register 
        

    }    
    
    

    public function add() {
	$this->set('carreras', $this->Carrera->find('list'));
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('El usuario ha sido creado'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('No se pudo crear, intente denuevo'));
            }
        }
    }
   
// app/Controller/UsersController.php



    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
            	if($this->Auth->User('tipo') == 0)
                	$this->redirect($this->Auth->redirect(array('controller' => 'profe', 'action' => 'index2')));
                       
                else{
                	if($this->Auth->User('tipo') == 1)
                    	$this->redirect($this->Auth->redirect(array('controller' => 'alumno', 'action' => 'index3')));
                       
					else{
                    	if($this->Auth->User('tipo') == 2)
                        	$this->redirect($this->Auth->redirect(array('controller' => 'admin', 'action' => 'index4')));
                            }
                        }
            } 
        else {
            $this->Session->setFlash(__('Invalid nombre y contraseña, try again'));
        }
        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
        $this->redirect($this->Auth->redirect(array('controller' => 'principal', 'action' => 'index')));
    }
    }
