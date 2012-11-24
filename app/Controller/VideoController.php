<?php
class VideoController extends AppController {
	var $helpers = array('Form', 'Html', 'Time','Session');
	var $name = 'Video';
	var $components = array ('Auth','Session');
	var $uses = array('User', 'Video','Alumno','Profe');
	
	function index() {
		$this->set('videos', $this->Video->find('all'));
	}
	
	function view_video($id = null) {
		$this->Video->id = $id;
		$this->set('video', $this->Video->read());	
	}
	
	function delete($id) {
		if ($this->Video->delete($id)){
			$this->Session->setFlash('El video fue borrado.');
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function add() {
	
		if (!empty($this->data))
		{
			$currentFile = $this->params['data']['File'];
			$filePath = WWW_ROOT . 'videos/' . $currentFile['name']; 
			 if (is_uploaded_file($currentFile['tmp_name']) && 
				 move_uploaded_file($currentFile['tmp_name'], $filePath) &&
				 $this->Video->save($this->data) && 
				 $this->Video->saveField('link', 'videos/' . $currentFile['name'])) 
			{ 	
				$this->Session->setFlash('El video fue subido correctamente');
			} 
		}

	}
}

?>
