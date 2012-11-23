<h1><?php echo $user['User']['nombre']?></h1>
<h1><?php echo $user['Carrera']['nombre']?></h1>
<h1><?php echo $user['User']['oficina']?></h1>
<h1><?php echo $user['User']['about']?></h1>

<p><?php echo $this->Html->link('videos', array('controller' => 'alumno',
								'action' => 'lista_videos', $user['User']['id'])); ?></p>
<p><?php echo $this->Html->link('posts', array('controller' => 'posts', 'action' => 'lista_posts',
								$user['User']['id'])); ?></p>
<p><?php echo $this->Html->link('volver', array('controller' => 'alumno','action' => 'index')); ?></p>
<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>

