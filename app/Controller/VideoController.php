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
		$this->Session->setFlash('El video with id: '.$id.' fue borrado.');
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

				echo "No Error";  
				echo $currentFile['name'];
			} 
		}

	}

				//$this->data['Video']['Video.user_id']= 

				#$this->set('users', $this->User->find('list',array('conditions' => array('User.id' => $this->Auth->User('id')))));
/*		if (!empty($this->data)) { 
			if (move_uploaded_file($_FILES['nombre']['tmp_name'], 
				WWW_ROOT . 'videos/' .  $_FILES['nombre']['name'])) 
			{
	 			if ($this->Video->save($this->data)) 
				{    
           			echo $this->data;
		 			$this->Session->setFlash('El video fue subido');                	 			
					$this->redirect(array('controller'=>'profe','action' => 'index'));     
	 			}
				else 
				{
					echo "no se ha guardado";
				}
	 		}
			else
			{
				echo "no se ha movido";
			}
	}
	else 
	{
		echo "wea vacia";
	}*/

//	public function repr_video() {
//		$ruta=$this->data;
//		echo $ruta;
		//echo $ruta;
		//      $this->set('ruta', WWW_ROOT . 'videos/32424883d0');
//	}
//	}
}

?>
