<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
    </tr>

    <?php foreach ($videos as $video): ?>
    <tr>
        <td><?php echo $video['Video']['id']; ?></td>
        <td><?php echo $this->Html->link($video['Video']['nombre'], array('action' => 'view', $video['Video']['id']));?></td>
        
        <?php endforeach; ?>
        </tr>
        </table>
        
        <p><?php echo $this->Html->link('volver', array('controller' => 'alumno','action' => 'index')); ?></p>
