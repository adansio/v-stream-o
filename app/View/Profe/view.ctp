<!-- archivo: /app/views/posts/view.ctp -->

<h1><?php echo $video['Video']['nombre']?></h1>
<h1><?php echo $video['Video']['user_id']?></h1>
<h1><?php echo $video['Video']['duracion']?></h1>
<h1><?php echo $video['Video']['descripcion']?></h1>
<?php $ruta = $video['Video']['link']; ?>
<h1><?php echo $ruta ?></h1>
<video poster="logo.png" controls autoplay style=" width:640; height:480; border: 1px solid black;"> 
	<source src=<?php echo '/queque/app/webroot/' . $ruta ?> />
</video>
<p></p>
<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>

<p><?php echo $this->Html->link('volver', array('controller' => 'profe','action' => 'index2')); ?></p>
