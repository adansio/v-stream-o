<?php
class AdminController extends AppController {
var $helpers = array('Form', 'Html', 'Time');
	var $uses = array('Alumno', 'Profe', 'Video', 'User','Carrera');

	
	
	public function isAuthorized($user){
			if(in_array($this->action, array('index4','view','viewuser', 'deleteuser', 'deletevideo' ))){
				if($user['tipo'] == 2 ){
					return true;
				}
			}
				
			return false;
		}
	
	function index4() {
		$this->set('users', $this->User->find('all'));
		$this->set('videos', $this->Video->find('all'));
		
	}
	
	function deletevideo($id) {
		if ($this->Video->delete($id)){
			$this->Session->setFlash('El video with id: '.$id.' fue borrado.');
			$this->redirect(array('action'=>'index4'));
		}
	}
	
	function deleteuser($id) {
		if ($this->User->delete($id)){
			$this->Session->setFlash('El usuario with id: '.$id.' fue borrado.');
			$this->redirect(array('action'=>'index4'));
		}
	}
	
	
	function view($id = null) {
		$this->Video->id = $id;
		$this->set('video', $this->Video->read());
	}
	function viewuser($id = null) {
		$this->User->id = $id;
		$this->set('user', $this->User->read());
	}
	
	
}

?>