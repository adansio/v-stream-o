<h1>Videos</h1>
<p><?php echo $this->Html->link('Add Videos', array('action' => 'add')); ?></p>

<p><?php echo $this->Html->link('Perfil', array('controller' => 'profe','action' => 'viewuser')); ?></p>
<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
    </tr>
<?php foreach ($videos as $video): ?>
    <tr>
        <td><?php echo $video['Video']['id']; ?></td>
        <td><?php echo $this->Html->link($video['Video']['nombre'], array('action' => 'view', $video['Video']['id']));?></td>
        <td><?php echo  $this->Html->link('Delete', array('action' => 'delete', $video['Video']['id']), null, 'Estas seguro?' )?></td>
        <?php endforeach; ?>
        </tr>
        </table>
        
        


<!-- Aquí esta el ciclo que muestra $posts a través de nuestro arreglo, imprimiendo la información de los posts -->

    