
<h2>Perfil</h2>

<h1><?php echo 'Nombre: '.$user['User']['nombre']?></h1>
<h1><?php echo 'Email: '.$user['User']['username']?></h1>
<h1><?php echo 'Rut: '.$user['User']['rut']?></h1>
<h1><?php echo 'Carrera: '.$user['Carrera']['nombre']?></h1>
<h1><?php echo 'Oficina '.$user['User']['oficina']?></h1>
<h1><?php echo 'About: '.$user['User']['about']?></h1>

<p><? 
//echo $this->Html->link('Editar Datos', array('controller' => 'users','action' => 'edit', $user['User']['id']) ); ?></p>



<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>

<p><?php echo $this->Html->link('volver', array('controller' => 'profe','action' => 'index')); ?></p>


	
