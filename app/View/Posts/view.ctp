<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo $post['Post']['title']?></h1>
	<br>
	<p><?php echo $post['Post']['body']?></p>
	<p><small>Publicado el: <?php echo $post['Post']['created']?></small></p>
	<?php if(date('Y-m-d H:i:s')  > $post['Post']['created']){ 
	?>
	<div class="boton"><A HREF="http://192.168.1.11/Streaming/index1.php">Streaming</div>
	<?php } ?>
		
<div class="boton"><?php echo $this->Html->link('Volver', array('controller' => 'posts','action' => 'lista_posts', 
								$post['Post']['user_id'])); ?></div>
