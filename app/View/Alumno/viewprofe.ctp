
<h2><?php echo 'Perfil del Profesor '.$user['User']['nombre'] ?></h2>




<h1><?php echo 'Carrera: '.$user['Carrera']['nombre']?></h1>
<h1><?php echo 'Oficina: '.$user['User']['oficina']?></h1>
<h1><?php echo 'Su informacion: '.$user['User']['about']?></h1>

<p><?php echo $this->Html->link('videos', array('controller' => 'alumno',
								'action' => 'lista_videos', $user['User']['id'])); ?></p>
<p><?php echo $this->Html->link('Publicaciones', array('controller' => 'posts', 'action' => 'lista_posts',
								$user['User']['id'])); ?></p>
<p><?php echo $this->Html->link('volver', array('controller' => 'alumno','action' => 'lista_profe')); ?></p>
<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>

