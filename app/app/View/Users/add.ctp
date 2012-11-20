
<!-- app/View/Users/add.ctp -->

<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('nombre');
        echo $this->Form->input('rut');
        echo $this->Form->input('rol');
        echo $this->Form->input('carrera_id');
        echo $this->Form->input('oficina');
        echo $this->Form->input('about');
        echo $this->Form->input('tipo', array(
            'options' => array(0 => 'Profe', 1 => 'Alumno')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
