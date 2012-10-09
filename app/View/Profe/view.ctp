<!-- archivo: /app/views/posts/view.ctp -->

<h1><?php echo $video['Video']['nombre']?></h1>
<h1><?php echo $video['Video']['user_id']?></h1>
<h1><?php echo $video['Video']['duracion']?></h1>
<h1><?php echo $video['Video']['descripcion']?></h1>
<h1><?php echo $video['Video']['link']?></h1>

<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>

<p><?php echo $this->Html->link('volver', array('controller' => 'profe','action' => 'index2')); ?></p>
