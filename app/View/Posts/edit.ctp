<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
	echo $this->Form->create('Post', array('action' => 'edit'));
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Save Post');
?>

<p><?php echo $this->Html->link('volver', array('controller' => 'posts','action' => 'index')); ?></p>
