<table>
<tr>
<th>Lista de Usuarios</th>
</tr>

<?php foreach ($users as $user): ?>
	<tr>           
   <td><?php echo $this->Html->link($user['User']['nombre'], array('controller' => 'alumno', 'action' => 'viewprofe', $user['User']['id']));?></td>
   <td><?php echo  $this->Html->link('Delete', array('action' => 'deleteuser', $user['User']['id']), null, 'Estas seguro?' );?></td> 
    
    
</tr>
<?php endforeach; ?>

</table>

<br>
<table>

<div class="boton"><?php echo $this->Html->link('Volver', array('controller' => 'admin','action' => 'index')); ?></div>
