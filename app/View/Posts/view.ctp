<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo $post['Post']['title']?></h1>
	<br>
	<p><?php echo $post['Post']['body']?></p>
	<p><small>Publicado el: <?php echo $post['Post']['created']?></small></p>

<p><?php echo $this->Html->link('volver', array('controller' => 'posts','action' => 'index')); ?></p>
