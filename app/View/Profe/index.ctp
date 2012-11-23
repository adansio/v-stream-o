<h2><?php echo 'Bienvenido Profesor '.$this->Session->read('Auth.User.nombre') ?></h2>

<p><?php echo $this->Html->link('Perfil', array('controller' => 'profe','action' => 'viewuser')); ?></p>
       
<p><?php echo $this->Html->link('Videos', array('controller' => 'video', 'action' => 'index')); ?></p>
   
<p><?php echo $this->Html->link('Posts', array('controller' => 'posts', 'action' => 'index')); ?></p>

<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>
   
