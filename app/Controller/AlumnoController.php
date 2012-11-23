<?php
class AlumnoController extends AppController {
	var $helpers = array('Form', 'Html', 'Time');
	var $uses = array('Alumno', 'Profe', 'Video', 'User', 'Historiale', 'Carrera', 'Departamento');


	public function isAuthorized($user){
			if(in_array($this->action, array('index', 'lista_videos', 'view','listacar', 'viewuser', 'viewprofe','lista_profe'))) {
				if($user['tipo'] == 1 ){
					return true;
				}
			}
				
			return false;
		}
	
	function index() {
		$this->set('profes', $this->User->find('all',array('conditions' => array('User.tipo' => 0))));
		$this->set('historiales', $this->Historiale->find('all', array('conditions' => array('user_username' => $this->Auth->User('username')))));
		$this->set('carreras', $this->Carrera->find('all'));
		$this->set('departamentos', $this->Departamento->find('all'));
		}
	
	function lista_videos($id = null){
		$this->User->id = $id;
		$this->set('videos', $this->Video->find('all', array('conditions' => array('Video.user_id' => $id))));
		
	}
	function lista_profe($id = null){
		$this->User->id = $id;
		$this->set('profes', $this->User->find('all',array('conditions' => array('User.tipo' => 0))));
		
		
	}
	function listacar($id = null){
		$this->set('videos', $this->Video->find('all', array('conditions' => array('User.carrera_id' => $id))));
		
	}
	
	function view($id = null) {
		$this->Video->id = $id;
		$this->set('video', $this->Video->read());
	}
	
	function viewuser() {
		$this->User->id = $this->Auth->User('id');
		$this->set('user', $this->User->read());
		
	}

	
	function viewprofe($id = null)
    {
         $this->User->id = $id;
         $this->set('user', $this->User->read());
	}

}		

?>
