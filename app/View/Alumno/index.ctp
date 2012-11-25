
<h1>Videos</h1>

<th>Bienvenido <?php echo $this->Session->read('Auth.User.nombre')?></th>


<p><?php echo $this->Html->link('Lista de Profesores', array('controller' => 'alumno','action' => 'lista_profe')); ?></p>

<th><?php echo $this->Html->link('Historial', array('controller' => 'historiale','action' => 'index')); ?></th>
</tr>
<br><br>
<br>


<p><?php echo $this->Html->link('Perfil', array('controller' => 'alumno','action' => 'viewuser')); ?></p>
<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>

