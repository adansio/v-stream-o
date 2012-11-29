<?php
class AdminController extends AppController {
var $helpers = array('Form', 'Html', 'Time');
	var $uses = array('Alumno', 'Profe', 'Video', 'User','Carrera');

	
	
	public function isAuthorized($user){
			if(in_array($this->action, array('index','view','viewuser', 'deleteuser', 'deletevideo', 'lista_users', 'lista_videos' ))){
				if($user['tipo'] == 2 ){
					return true;
				}
			}
				
			return false;
		}
	
	function index() {
		
		
		
	}
	
	function deletevideo($id) {
		if ($this->Video->delete($id)){
			$this->Session->setFlash('El video with id: '.$id.' fue borrado.');
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function deleteuser($id) {
		if ($this->User->delete($id)){
			$this->Session->setFlash('El usuario with id: '.$id.' fue borrado.');
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function lista_users(){
		
		$this->set('users', $this->User->find('all'));
		
		
	}
	
	function lista_videos(){
		
		$this->set('videos', $this->Video->find('all'));
		
	}
	
	function viewuser($id = null) {
		$this->User->id = $id;
		$this->set('user', $this->User->read());
	}
	
	
	
}

?>
