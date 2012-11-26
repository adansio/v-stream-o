<h2>Perfil </h2>


<h1><?php echo 'Nombre: '.$user['User']['nombre']?></h1>
<h1><?php echo 'Username: '.$user['User']['username']?></h1>
<h1><?php echo 'Rol: '.$user['User']['rol']?></h1>
<h1><?php echo 'Carrera: '.$user['Carrera']['nombre']?></h1>




<div class="boton"><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></div>

<div class="boton"><?php echo $this->Html->link('volver', array('controller' => 'alumno','action' => 'index')); ?></div>
