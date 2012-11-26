
<h2>Perfil</h2>

<h1><?php echo 'Nombre: '.$user['User']['nombre']?></h1>
<h1><?php echo 'Email: '.$user['User']['username']?></h1>
<h1><?php echo 'Rut: '.$user['User']['rut']?></h1>
<h1><?php echo 'Carrera: '.$user['Carrera']['nombre']?></h1>
<h1><?php echo 'Oficina '.$user['User']['oficina']?></h1>
<h1><?php echo 'About: '.$user['User']['about']?></h1>

<div class="boton" ><?php echo $this->Html->link('Logout', array('controller' => 'users','action' => 'logout')); ?></div>

<div class="boton"><?php echo $this->Html->link('Volver', array('controller' => 'profe','action' => 'index')); ?></div>


	
