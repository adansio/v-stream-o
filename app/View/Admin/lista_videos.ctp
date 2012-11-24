

<h1>Lista de Videos</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
    </tr>
<?php foreach ($videos as $video): ?>
    <tr>
        <td><?php echo $video['Video']['id']; ?></td>
        <td><?php echo $this->Html->link($video['Video']['nombre'], array('action' => 'view', $video['Video']['id']));?></td>
        <td><?php echo  $this->Html->link('Delete', array('action' => 'deletevideo', $video['Video']['id']), null, 'Estas seguro?' )?></td>
        <?php endforeach; ?>
        </tr>
        </table>

<p><?php echo $this->Html->link('volver', array('controller' => 'admin','action' => 'index')); ?></p>
