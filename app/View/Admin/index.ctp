
<h2><?php echo $this->Session->read('Auth.User.nombre')     ?></h2>

<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>
<p><?php echo $this->Html->link('Agregar Usuario', array('controller' => 'users','action' => 'add')); ?></p>



<tr>
<th>Listas</th>
</tr>

<p><?php echo $this->Html->link('Lista de Profesores', array('controller' => 'admin','action' => 'lista_profe')); ?></p>

<p><?php echo $this->Html->link('Lista de Videos', array('controller' => 'admin','action' => 'lista_videos')); ?></p>



        
       

