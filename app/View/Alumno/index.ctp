
<h1>Videos</h1>

<th>Bienvenido <?php echo $this->Session->read('Auth.User.nombre')?></th>


<p><?php echo $this->Html->link('Lista de Profesores', array('controller' => 'alumno','action' => 'lista_profe')); ?></p>

<th>Historial</th>
</tr>

<?php foreach ($historiales as $historial): ?>
    <tr>
        
        <td><?php echo $this->Html->link($historial['Video']['nombre'], 
        array('action' => 'view', $historial['Video']['id']));?></td>
        <td>
        <?php echo $historial['Historial']['fecha'] ?>
        </td>
        
        <?php endforeach; ?>
</table>

<p><?php echo $this->Html->link('Perfil', array('controller' => 'alumno','action' => 'viewuser')); ?></p>
<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>

