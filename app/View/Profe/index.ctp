<h1>Portada</h1>
<p><?php echo $this->Html->link('Add Videos', array('controller'=>'video','action' => 'add')); ?></p>

<p><?php echo $this->Html->link('Perfil', array('controller' => 'profe','action' => 'viewuser')); ?></p>
       
<p><?php echo $this->Html->link('Videos', array('controller' => 'video', 'action' => 'index')); ?></p>
   
<p><?php echo $this->Html->link('Posts', array('controller' => 'posts', 'action' => 'index')); ?></p>

<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>
   
