
<h2>Publicaciones</h2>

<table>
    <tr>
        <th>Nombre</th>
        <th>Fecha</th>
    </tr>
   
    
    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo  $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?></td>
        <td><?php echo $post['Post']['created'];?></td>
        
        <?php endforeach; ?>
        </tr>
        </table>
        
	<?php if ($this->Session->read('Auth.User.tipo') == 2){ ?>
			<div class="boton"><?php echo $this->Html->link('Volver', array('controller' => 'admin','action' => 'index')); ?></div>
	<?	 }
		if ($this->Session->read('Auth.User.tipo') == 1){ ?>
			<div class="boton"><?php echo $this->Html->link('Volver', array('controller' => 'alumno',
							'action' => 'viewprofe', $post['Post']['user_id'] )); ?></div>
	<?	 }
		if ($this->Session->read('Auth.User.tipo') == 0){ ?>
			<div class="boton"><?php echo $this->Html->link('Volver', array('controller' => 'Profe','action' => 'index', 
			$post['Post']['user_id'])); ?></div>
	<?	} ?>

