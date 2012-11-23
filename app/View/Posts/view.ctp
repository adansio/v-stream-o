<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo $post['Post']['title']?></h1>
	<br>
	<p><?php echo $post['Post']['body']?></p>
	<p><small>Publicado el: <?php echo $post['Post']['created']?></small></p>
	<?php if(date('Y-m-d H:i:s')  > $post['Post']['created']){  ?>
	<p><A HREF="http://190.45.19.207/streaming/ch0.html">Streaming</A>
	<?php } ?>

<p><?php echo $this->Html->link('volver', array('controller' => 'posts','action' => 'lista_posts', 
								$post['Post']['user_id'])); ?></p>
