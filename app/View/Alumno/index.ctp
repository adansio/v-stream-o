
<h1>V-Stream'O</h1>

<h2>Bienvenido <?php echo $this->Session->read('Auth.User.nombre')?></h2>


<div class="boton"><?php echo $this->Html->link('Lista de Profesores', array('controller' => 'alumno','action' => 'lista_profe')); ?></div>

<div class="boton"><?php echo $this->Html->link('Historial', array('controller' => 'historiale','action' => 'index')); ?></div>
</tr>
<br><br>
<br>


<div class="boton"><?php echo $this->Html->link('Perfil', array('controller' => 'alumno','action' => 'viewuser')); ?></div>
<div class="boton"><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></div>

