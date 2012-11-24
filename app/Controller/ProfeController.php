<?php
class ProfeController extends AppController {
	var $helpers = array('Form', 'Html', 'Time');
	var $uses = array('Profe', 'Video', 'User','Carrera','Post','Alumno');

	
	public function isAuthorized($user){
			if(in_array($this->action, array('index','add','delete','view', 'viewuser', 'viewprofe'))){
				if($user['tipo'] == 0 ){
					return true;
				}
			}
			return false;
	}
	
	function index() {
		
		$this->set('videos', $this->Video->find('all',array('conditions' => array('Video.user_id' => $this->Auth->User('id')))));
		$this->set('posts', $this->Post->find('all'));

	}
	
	function view($id = null) {
		$this->Video->id = $id;
		$this->set('video', $this->Video->read());
	}
	
	function viewuser() {
		$this->User->id = $this->Auth->User('id');
		$this->set('user', $this->User->read());	
	}

}
?>
