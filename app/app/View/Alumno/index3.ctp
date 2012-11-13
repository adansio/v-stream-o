<h1>Videos</h1>

<p><?php echo $this->Html->link('logout', array('controller' => 'users','action' => 'logout')); ?></p>
<p><?php echo $this->Html->link('Perfil', array('controller' => 'alumno','action' => 'viewuser')); ?></p>

<table>
<tr>
<th>Lista de Profes</th>
</tr>

<?php foreach ($profes as $profe): ?>
    
        
        <td><?php echo $this->Html->link($profe['User']['nombre'], array('action' => 'lista', $profe['User']['id']));?></td>
        
        <?php endforeach; ?>
</table>



<table>
<tr>
<th>Lista de Carreras</th>
</tr>

<A HREF="http://190.45.19.207/streaming/ch0.html">Streaming</A>

<?php foreach ($carreras as $carrera): ?>
    
        
        <td><?php echo $this->Html->link($carrera['Carrera']['nombre'], array('action' => 'listacar', $carrera['Carrera']['id']));?></td>
        
        <?php endforeach; ?>
</table>

<table>
<tr>
<th>Lista de Departamentos</th>
</tr>

<?php foreach ($departamentos as $departamento): ?>
    
        
        <td><?php echo $this->Html->link($departamento['Departamento']['nombre'], array('action' => 'listadep', $departamento['Departamento']['id']));?></td>
        
        <?php endforeach; ?>
</table>


<table>
<tr>
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


