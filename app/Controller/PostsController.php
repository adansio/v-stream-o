<?php class PostsController extends AppController {
	    public $helpers = array('Html','Form','Session'); 

		var $components = array ('Auth','Session'); 
		var $uses = array('Post','User', 'Alumno');
		function index() {
			$this->set('posts', $this->Post->find('all'));
		}

		public function view($id = null) {
		    $this->Post->id = $id;
		    $this->set('post', $this->Post->read());
		}

		public function add() {
			//$this->set('users', $this->User->find('list',array('conditions' => array('User.id' => $this->Auth->User('id')))));
			$this->Post->create();
				if ($this->request->is('post')) {
				if ($this->Post->save($this->request->data)) {
					$this->Session->setFlash('Tu post fue guardado');
					$this->redirect(array('action' => 'index'));
			}
			}
		}

		function edit($id = null) {
		    $this->Post->id = $id;
		    if ($this->request->is('get')) {
			    $this->request->data = $this->Post->read();
			} 
			else 
			{
				if ($this->Post->save($this->request->data)) 
				{
					$this->Session->setFlash('Your post has been updated.');
					$this->redirect(array('action' => 'index'));
				}
		    }
		}

		function delete($id) {
		    if (!$this->request->is('post')) 
			{
				throw new MethodNotAllowedException();
			}
			if ($this->Post->delete($id)) 
			{
				$this->Session->setFlash('Post con id: ' . $id . ' ha sido borrado.');
				$this->redirect(array('action' => 'index'));
		    }
		}
		
		function lista_posts ($id = null){
			$this->User->id = $id;
			$this->set('posts', $this->Post->find('all', array('conditions' => array('Post.user_id' => $id))));
		}
}
