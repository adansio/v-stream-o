

<table>
    <tr>
<th>Lista de Videos</th>
<th>Nombre Video</th>
</tr>
    <?php foreach ($videos as $video): ?>
    <tr>
        <td><?php echo $video['Video']['id']; ?></td>
        <td><?php echo $this->Html->link($video['Video']['nombre'], array('controller'=>'alumno','action' => 'view_video', $video['Video']['id']));?></td>
        
        <?php endforeach; ?>
        </tr>
        </table>
        
        <div class="boton"><?php echo $this->Html->link('Volver', array('controller' => 'alumno','action' => 'viewprofe',  $video['Video']['user_id'])); ?></div>
