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
                if ($this->Session->read('Auth.User.tipo') == 2){
                $this->redirect(array('controller' => 'admin','action' => 'index'));    
                }else
                $this->redirect(array('action' => 'login'));
                    
            
            } else {
                $this->Session->setFlash(__('No se pudo crear, intente denuevo'));
            }
        }
    }
    
    /*function edit($id = null) {
            $this->User->id = $id;
           
            if ($this->request->is('get')) {
                $this->request->data = $this->User->read();
            } 
            else 
            {
                if ($this->User->save($this->request->data)) 
                {
                    $this->Session->setFlash('Tu informacion ha sido cambiada');
                    $this->redirect(array('action' => 'viewuser'));
                }
            }
        }
*/    
   
// app/Controller/UsersController.php



    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
            	if($this->Auth->User('tipo') == 0)
                	$this->redirect($this->Auth->redirect(array('controller' => 'profe', 'action' => 'index')));
                       
                else{
                	if($this->Auth->User('tipo') == 1)
                    	$this->redirect($this->Auth->redirect(array('controller' => 'alumno', 'action' => 'index')));
                       
					else{
                    	if($this->Auth->User('tipo') == 2)
                        	$this->redirect($this->Auth->redirect(array('controller' => 'admin', 'action' => 'index')));
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
