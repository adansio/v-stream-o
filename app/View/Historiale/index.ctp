

<?php foreach ($historiales as $historiale): ?>
<tr>
     
	<td><?php echo $this->Html->link($historiale['Historiale']['fecha'], 
    		array('action' => 'view_video', $historiale['Historiale']['video_id']));?></td>
	<td>

	<br><br>
	</td>
	<?php endforeach; ?>
	</table>

<div class="boton"><?php echo $this->Html->link('volver', array('controller' => 'alumno','action' => 'index')); ?></div>

