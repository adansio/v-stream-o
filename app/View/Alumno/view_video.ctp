<!-- archivo: /app/views/posts/view.ctp -->

<h1><?php echo 'Nombre: '.$video['Video']['nombre']?></h1>

<h1><?php echo 'Descripción: '.$video['Video']['descripcion']?></h1>
<?php $ruta = $video['Video']['link']; ?>
<h1><?php //echo $ruta ?></h1>
<video poster="logo.png" controls autoplay style=" width:640; height:480; border: 1px solid black;"> 
	<source src=<?php echo '/queque/app/webroot/' . $ruta ?> />
</video>
<p></p>
<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>

<div class="boton"><?php 
if ($this->Session->read('Auth.User.tipo') == 2){
echo $this->Html->link('Volver', array('controller' => 'admin','action' => 'lista_videos')); 
}

if ($this->Session->read('Auth.User.tipo') == 1){
echo $this->Html->link('Volver', array('controller' => 'alumno','action' => 'lista_videos', $video['Video']['user_id'] )); 
}

if ($this->Session->read('Auth.User.tipo') == 0){
echo $this->Html->link('Volver', array('controller' => 'video','action' => 'index', $video['Video']['user_id'])); 
}


?></div>
