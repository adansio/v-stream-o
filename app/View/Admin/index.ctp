
<p><?php echo $this->Session->read('Auth.User.nombre')     ?></p>

<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>
<p><?php echo $this->Html->link('Agregar Usuario', array('controller' => 'users','action' => 'add')); ?></p>



<tr>
<th>Lista de Usuarios</th>
</tr>
 <table>

<?php foreach ($users as $user): ?>
    <tr>
        
        <td><?php echo $this->Html->link($user['User']['username'], array('action' => 'viewuser', $user['User']['id']));?></td>
        <td><?php echo  $this->Html->link('Delete', array('action' => 'deleteuser', $user['User']['id']), null, 'Estas seguro?' )?></td>
        <?php endforeach; ?>
</tr>
</table>

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
        
       

