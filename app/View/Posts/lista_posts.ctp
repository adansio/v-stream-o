
<h2>Lista de Streaming</h2>

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
        
	<?php if ($this->Session->read('Auth.User.tipo') == 2){
			echo $this->Html->link('volver', array('controller' => 'admin','action' => 'index')); 
		 }
		if ($this->Session->read('Auth.User.tipo') == 1){
			echo $this->Html->link('volver', array('controller' => 'alumno',
							'action' => 'viewprofe', $post['Post']['user_id'] )); 
		 }
		if ($this->Session->read('Auth.User.tipo') == 0){
			echo $this->Html->link('volver', array('controller' => 'Profe','action' => 'index', 
			$post['Post']['user_id'])); 
		}

