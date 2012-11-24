<!-- File: /app/View/Posts/edit.ctp -->

<h2>Editar Datos</h2>
<?php
	
	echo $this->Form->create('User', array('action' => 'edit'));
	echo $this->Form->input('password');
	echo $this->Form->input('oficina');
	echo $this->Form->input('about');
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Guardar Datos');
?>

<p><?php echo $this->Html->link('volver', array('controller' => 'profe','action' => 'viewuser')); ?></p>
