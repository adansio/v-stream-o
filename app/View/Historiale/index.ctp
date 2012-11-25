<?php foreach ($historiales as $historiale): ?>
<tr>
     
	<td><?php echo $this->Html->link($historiale['Historiale']['video_id'], 
    		array('action' => 'view_video', $historiale['Historiale']['video_id']));?></td>
	<td>
	<?php echo $historiale['Historiale']['fecha'] ?>
	<br><br>
	</td>
	<?php endforeach; ?>
	</table>

<p><?php echo $this->Html->link('volver', array('controller' => 'alumno','action' => 'index')); ?></p>

