<?php

class HistorialeController extends AppController {
	var $helpers = array('Form', 'Html', 'Time','Session');
	var $name = 'Historiale';
	var $components = array ('Auth','Session');
	var $uses = array('User', 'Video','Alumno','Profe','Historiale');
	
	function index() {
		
		$this->set('historiales', $this->Historiale->find('all',
		             array('conditions' => array('user_id' => $this->Session->Read('Auth.User.id'), 'video_id <>' =>  0 ),
					      'order'=> 'Historiale.id Desc'
					 )));
	

	
	}	
	
	function view_video($id = null) {
		 $this->Video->id = $id;
	     $this->set('video', $this->Video->read());
	}

	

		           
		           



}

