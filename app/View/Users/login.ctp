<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Login'); ?></legend>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    	//echo $this->Form->input('tipo', array(
          //  'options' => array(0 => 'Profe', 1 => 'Alumno')));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>

<td><?php echo $this->Html->link('si no tienes cuenta registrate', array('action' => 'add'));?></td>
</div>