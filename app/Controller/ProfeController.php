<?php
class ProfeController extends AppController {
var $helpers = array('Form', 'Html', 'Time');
	var $uses = array('Profe', 'Video', 'User','Carrera');

	
	public function isAuthorized($user){
			if(in_array($this->action, array('index2','add','delete','view', 'viewuser'))){
				if($user['tipo'] == 0 ){
					return true;
				}
			}
			
				
			return false;
	}
	
	function index2() {
		
		$this->set('videos', $this->Video->find('all',array('conditions' => array('Video.user_id' => $this->Auth->User('id')))));
		
	}

	public function add() {        
/*	
	$directorio = '../webroot/videos/';
	if(move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio . $_FILES['archivo']['name'])){
		print "Archivo subido con exito";
	}
	else
	{
		print "Error";
	}*/

	if (!empty($this->data))
	{	$directorio = '/videos/';
		$currentFile = $this->params['data']['File'];
	    $filePath = WWW_ROOT . $directorio  . $currentFile['name'];
		if (is_uploaded_file($currentFile['tmp_name']) &&
			move_uploaded_file($currentFile['tmp_name'], $filePath))
			{
				echo "Eeeeexito!";
			}
		else 
			echo "cago la wea";
	} 
	else 
		echo "paloyo";
/*	if (!empty($this->data)) {        
	 			
		$this->data['Video']['Video.usuario_id']=$this->Auth->User('id');	
		if ($this->Video->save($this->data)) {                
 			$this->Session->setFlash('El video fue subido');                
 			$this->redirect(array('action' => 'index2'));     
       }  
   }		             
*/
	}
	
	
	function delete($id) {
		if ($this->Video->delete($id)){
			$this->Session->setFlash('El video with id: '.$id.' fue borrado.');
			$this->redirect(array('action'=>'index2'));
		}
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
