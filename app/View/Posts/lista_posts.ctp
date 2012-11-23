<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
    </tr>
   
    
    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td><?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?></td>
        
        <?php endforeach; ?>
        </tr>
        </table>
        
        <p><?php echo $this->Html->link('volver', array('controller' => 'alumno','action' => 'viewprofe', $post['Post']['user_id'])); ?></p>
