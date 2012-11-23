<table>
<tr>
<th>Lista de Profes</th>
</tr>

<?php foreach ($profes as $profe): ?>
	<tr>           
    <td><?php echo $this->Html->link($profe['User']['nombre'], array('controller' => 'alumno', 'action' => 'viewprofe', $profe['User']['id']));?></td>
</tr>
<?php endforeach; ?>

</table>

<br>
<table>

<p><?php echo $this->Html->link('volver', array('controller' => 'alumno','action' => 'index')); ?></p>