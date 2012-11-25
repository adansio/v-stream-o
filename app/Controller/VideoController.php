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
		//$getID3 = new getID3;
	
		if (!empty($this->data))
		{
			$currentFile = $this->params['data']['File'];
			$filePath = WWW_ROOT . 'videos/' . $currentFile['name']; 
			//$info = $getID3->analyze($filePath);
			//echo $info['playtime_string'];
			$movie = new ffmpeg_movie($currentFile['tmp_name']);
			$dur = $movie->getDuration();
			$hor = floor($dur/3600);
			$min = (($dur / 60) % 60);
			$sec = ($dur % 60);
	
			$duracion['hor'] = str_pad($hor, 2,"0", STR_PAD_LEFT);
			$duracion['min'] = str_pad($min, 2,"0", STR_PAD_LEFT);
			$duracion['sec'] = str_pad($sec, 2,"0", STR_PAD_LEFT);

			$duracion = implode(':',$duracion);

			 if (is_uploaded_file($currentFile['tmp_name']) && 
				 move_uploaded_file($currentFile['tmp_name'], $filePath) &&
				 $this->Video->save($this->data) && 
				 $this->Video->saveField('duracion', $duracion) &&
				 $this->Video->saveField('link', 'videos/' . $currentFile['name']))
			{ 	
				$this->Session->setFlash('El video fue subido correctamente');
	
			} 
		}

	}
}
//}
?>
