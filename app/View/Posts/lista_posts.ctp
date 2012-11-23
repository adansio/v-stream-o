
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
        
        <p><?php echo $this->Html->link('volver', array('controller' => 'alumno','action' => 'viewprofe', $post['Post']['user_id'])); ?></p>
