<h1>Videos</h1>

<?php 
if ($this->Session->read('Auth.User.tipo') == 0 || $this->Session->read('Auth.User.tipo') == 2) { ?>
<div class="boton"><?php echo $this->Html->link('Agregar Video', array('controller'=>'video','action' => 'add')); ?></div>
<br>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
    </tr><?php foreach ($videos as $video): ?>
    <tr>

	<?php if($this->Session->read('Auth.User.id') == $video['Video']['user_id'])
	{ ?>
        <td><?php echo $video['Video']['id']; ?></td>
        <td><?php echo $this->Html->link($video['Video']['nombre'], array('action' => 'view_video', $video['Video']['id']));?></td>
        <td><?php echo  $this->Html->link('Delete', array('action' => 'delete', $video['Video']['id']), null, 'Estas seguro?' )?></td>
        <?php } endforeach; ?>
        </tr>
        </table>

        <div class="boton"><?php echo  $this->Html->link('volver', array('controller' => 'profe', 'action' => 'index'))?></div>
	<?php }
			else echo "sin permisos"; ?>

