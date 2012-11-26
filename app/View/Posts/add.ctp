<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>

<?php 
if ($this->Session->read('Auth.User.tipo') == 0 || $this->Session->read('Auth.User.tipo') == 2) { ?>
	
<?php
	$usuario = $this->Session->read('Auth.User.id');
	//echo $usuario;
	echo $this->Form->create('Post');
	echo $this->Form->input('user_id',array('type' => 'hidden', 'value' =>$this->Session->read('Auth.User.id') ));
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->end('Save Post');
?>

<div class="boton"><?php echo $this->Html->link('Volver', array('controller' => 'posts','action' => 'index')); ?></div>

<?php }
	else echo "sin permisos"; ?>

