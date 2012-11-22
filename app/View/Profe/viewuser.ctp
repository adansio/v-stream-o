<?php 
if ($this->Session->read('Auth.User.tipo') == 0 || $this->Session->read('Auth.User.tipo') == 2) { ?>

<h1><?php echo $user['User']['nombre']?></h1>
<h1><?php echo $user['User']['username']?></h1>
<h1><?php echo $user['User']['rut']?></h1>
<h1><?php echo $user['User']['tipo']?></h1>
<h1><?php echo $user['Carrera']['nombre']?></h1>
<h1><?php echo $user['User']['oficina']?></h1>
<h1><?php echo $user['User']['about']?></h1>

<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>

<p><?php echo $this->Html->link('volver', array('controller' => 'profe','action' => 'index')); ?></p>

<? } 
	else  { ?>

<h1><?php echo $user['User']['nombre']?></h1>
<h1><?php echo $user['Carrera']['nombre']?></h1>
<h1><?php echo $user['User']['oficina']?></h1>
<h1><?php echo $user['User']['about']?></h1>
<? }
?>
