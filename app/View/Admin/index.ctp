
<h2><?php echo $this->Session->read('Auth.User.nombre')     ?></h2>

<div class="boton"><?php echo $this->Html->link('Agregar Usuario', array('controller' => 'users','action' => 'add')); ?></div>



<div class="boton"><?php echo $this->Html->link('Lista de Profesores', array('controller' => 'admin','action' => 'lista_profe')); ?></div>

<div class="boton"><?php echo $this->Html->link('Lista de Videos', array('controller' => 'admin','action' => 'lista_videos')); ?></div>


<div class="boton"><?php echo $this->Html->link('Logout', array('controller' => 'users','action' => 'logout')); ?></div>

        
       

